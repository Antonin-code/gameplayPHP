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
Route::Delete('/games/destroy/{game}', [GameController::class, 'destroy']);

//Route pour compter le total de jeux , films et séries
Route::get('/home', [GameController::class, 'count']);
Route::get('/home2', [MovieController::class, 'count']);
Route::get('/home3', [SerieController::class, 'count']);



