<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SerieController;
use Illuminate\Support\Facades\Route;

Route::get('/movies', [MovieController::class, 'index']);

Route::get('/series', [SerieController::class, 'index']);


//Route pour les jeux
Route::get('/games', [GameController::class, 'index']);
Route::post('/games/store', [GameController::class, 'store']);


