<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;

Route::controller(UserController::class)->group(function () {
    Route::any('loginForm', 'loginForm')->name('loginForm');
    Route::post('login', 'login')->name('login');
    Route::post('logout', 'logout')->name('logout');
    Route::get('registerForm', 'registerForm')->name('registerForm');
    Route::post('register', 'register')->name('register');
});

Route::middleware('auth')->controller(SearchController::class)->group(function () {
    Route::any('searchForm', 'searchForm')->name('searchForm');
    Route::post('search', 'search')->name('search');
});
