<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::post('/registration', [UserController::class, 'register']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/profile', [UserController::class, 'profile']);
});
