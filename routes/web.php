<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PostsController::class, 'index']);

Route::get('/login_register', [UserController::class, 'index'])->name('login_register')->middleware('guest');


Route::post('/users', [UserController::class, 'store']);

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth')->name('logout');

Route::post('/users/authenticate', [UserController::class, 'authenticate']);