<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\LengthAwarePaginator;
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
        $results  = $this->userRepository->search($name);
        $collection = collect($results);
        $currentPage = $request->input('page', 1);
        $perPage = config('const.perPage');

        $paginatedResults = new LengthAwarePaginator(
            $collection->forPage($currentPage, $perPage),
            $collection->count(),
            $perPage,
            $currentPage,
            ['path' => $request->url(), 'query' => $request->query()]
        );

        return view('search.results', ['users' => $paginatedResults]);
    }
}
