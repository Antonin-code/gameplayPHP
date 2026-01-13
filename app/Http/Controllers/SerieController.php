<?php

namespace App\Http\Controllers;

use App\DTOs\SerieDTO;
use App\Http\Requests\Series\StoreSerieRequest;
use App\Models\Serie;

class SerieController extends Controller
{


    public function index(){
        return response()->json(Serie::all());
    }

    public function count(){
        return response()->json(Serie::count());
    }

    public function store (StoreSerieRequest $request, StoreSerieAction $action){

        $dto = SerieDTO::fromRequest($request);

        $action->execute($dto);

        return response()->json([
            'message' => 'Série ajouté avec succès',
        ], 201);
    }
}
