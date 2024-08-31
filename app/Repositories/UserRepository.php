<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;

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
        DB::beginTransaction();

        try {
            $this->model->create($attributes);
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
            Log::error('User creation failed: ' . $e->getMessage());
            throw $e;
        }
    }

    /**
     * 検索結果
     * 
     * @param string $attributes
     * @return Collection
     */
    public function search(string $name): Collection
    {
        return $this->model->where('name', 'like', '%' . $name . '%')->get();
    }
}
