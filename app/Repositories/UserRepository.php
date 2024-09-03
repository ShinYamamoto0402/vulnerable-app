<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\DB;

/**
 * SQLインジェクション: search() メソッドの name パラメータを直接クエリに渡すことで、SQLインジェクションのリスクを生じさせます。
 * トランザクション管理の不備: 例外処理を外し、トランザクションの管理を不適切にしてエラーハンドリングの欠如を発生させます。
 */

class UserRepository implements UserRepositoryInterface
{
    protected $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    /**
     * ユーザー登録
     * 
     * @param array $attributes
     * @return void
     */
    public function create(array $attributes): void
    {
        $this->model->create($attributes);
    }

    /**
     * 検索結果
     * 
     * @param ?string $name
     * @return array
     */
    public function search(?string $name): array
    {
        return DB::select("SELECT * FROM users WHERE name LIKE '%$name%'");
    }
}
