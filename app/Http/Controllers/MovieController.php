<?php

namespace App\Http\Controllers;

use App\Actions\Movie\StoreMovieAction;
use App\DTOs\MovieDTO;
use App\Http\Requests\Movies\StoreMovieRequest;
use App\Models\Movie;
use App\Models\Serie;

class MovieController extends Controller
{
    public function index()
    {
        return response()->json(Movie::all());
    }

    public function count(){
        return response()->json(Movie::count());
    }

    public function store(StoreMovieRequest $request,StoreMovieAction $action){

        $dto = MovieDTO::fromRequest($request);

        $action->execute($dto);

        return response()->json([
            'message' => 'Film ajouté avec succès',
        ], 201);
    }
}
