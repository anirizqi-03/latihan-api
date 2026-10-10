<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;

Route::apiResource('books', BookController::class);

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::post('/logout', [AuthController::class, 'logout']);
});
