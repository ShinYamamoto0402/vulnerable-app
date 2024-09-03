<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Repositories\UserRepositoryInterface;

class SearchController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * 検索フォーム
     * 
     * @return View
     */
    public function search(): View
    {
        return view('search.index');
    }

    /**
     * 検索結果を表示
     * 
     * @param Request $request
     * @return View
     */
    public function results(Request $request): View
    {
        $name = $request->input('name');
        $users = $this->userRepository->search($name);

        return view('search.results', ['users' => $users]);
    }
}
