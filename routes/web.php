<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware('guest')->group(function () {

    Route::get('/register', [AuthController::class,'showRegister'])
        ->name('register');

    Route::post('/register', [AuthController::class,'register'])
        ->name('register.post');

    Route::get('/login', [AuthController::class,'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class,'login'])
        ->name('login.post');
});

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [DashboardController::class,'index'])
        ->name('dashboard');

    Route::post('/logout', [AuthController::class,'logout'])
        ->name('logout');
});