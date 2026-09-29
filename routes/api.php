<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BookApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// --- ROUTE API BUKU ---
Route::get('/books', [BookApiController::class, 'index']);
Route::post('/books', [BookApiController::class, 'store']);
Route::get('/books/{id}', [BookApiController::class, 'show']);
Route::put('/books/{id}', [BookApiController::class, 'update']);
Route::delete('/books/{id}', [BookApiController::class, 'destroy']);