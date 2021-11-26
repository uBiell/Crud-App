<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index']);
Route::get('/create-register', [UserController::class, 'createRegister']);
Route::post('/', [UserController::class, 'store']);
