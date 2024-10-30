<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;   

Route::get('/dashboard', function () {
    return view('home.dashboard');
});

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/tambah', [UserController::class, 'create']);
Route::post('/user/tambah', [UserController::class, 'store']);
Route::get('/user/{id}/edit', [UserController::class, 'show']);
Route::post('/user/{id}/update', [UserController::class, 'update']);
Route::get('/user/{id}/hapus', [UserController::class, 'destroy']);