<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| AUTH
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/logout', [AuthController::class, 'logout']);

/*
|--------------------------------------------------------------------------
| PROTECTED ROUTES
|--------------------------------------------------------------------------
*/
Route::middleware('auth.custom')->group(function () {
    Route::get('/', [BookController::class, 'rak']);
    Route::get('/books', [BookController::class, 'index']);
    Route::get('/loans', [LoanController::class, 'index']);
    Route::get('/services', [ServiceController::class, 'index']);
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/rak-buku', function () {
    return view('rak');
});

