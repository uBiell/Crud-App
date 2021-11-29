<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index']);
Route::get('/create-register', [UserController::class, 'createRegister']);
Route::post('/', [UserController::class, 'store']);
Route::delete('/{id}', [UserController::class, 'destroy']);
Route::get('/edit/{id}', [UserController::class, 'edit']);
Route::get('/info/{id}', [UserController::class, 'info']);
Route::put('/update/{id}', [UserController::class, 'update']);
