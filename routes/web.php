<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;
use App\Http\Middleware\CheckUserSession;
use Illuminate\Foundation\Http\Middleware\ValidateCsrfToken;
use Illuminate\Support\Facades\Session;

Route::controller(UserController::class)->group(function () {
    Route::any('loginForm', 'loginForm')->name('loginForm');
    Route::post('login', 'login')->name('login')
        ->withoutMiddleware(ValidateCsrfToken::class);
    Route::post('logout', 'logout')->name('logout')
        ->withoutMiddleware(ValidateCsrfToken::class);
    Route::get('registerForm', 'registerForm')->name('registerForm');
    Route::post('register', 'register')->name('register')
        ->withoutMiddleware(ValidateCsrfToken::class);
});

Route::controller(SearchController::class)->group(function () {
    Route::any('search', 'search')->name('search')
        ->middleware(CheckUserSession::class)
        ->withoutMiddleware(ValidateCsrfToken::class);
    Route::any('results', 'results')->name('results')
        ->middleware(CheckUserSession::class)
        ->withoutMiddleware(ValidateCsrfToken::class);
});
