<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostsController::class, 'index']);


Route::get('/login_register', [UserController::class, 'index']);