<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * 検索結果を表示
     * 
     * @param Request $request
     * @return View
     */
    public function search(Request $request): View
    {
        $name = $request->input('name');

        $users = DB::table('users')
            ->where('name', 'like', '%' . $name . '%')
            ->get();

        return view('results', ['users' => $users]);
    }
}
