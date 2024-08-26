<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;

Route::get('/search', function () {
    return view('search');
});

Route::post('/search', [UserController::class, 'search']);
