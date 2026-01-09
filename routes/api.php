<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/movies', [MovieController::class, 'index']);
Route::post('/movies/store', [MovieController::class, 'store']);

Route::get('/series', [MovieController::class, 'index']);
Route::post('/series/store', [MovieController::class, 'store']);

Route::get('/games', [MovieController::class, 'index']);
Route::post('/series/store', [MovieController::class, 'store']);


