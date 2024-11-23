<?php

use App\Http\Controllers\API\UserBookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('users/{user}/books/{book}/favorite', [UserBookController::class, 'addFavoriteBook']);
