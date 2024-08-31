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
    Route::any('search', 'search')->name('search');
    Route::post('results', 'results')->name('results');
});
