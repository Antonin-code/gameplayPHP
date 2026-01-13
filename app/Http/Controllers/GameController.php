<?php

namespace App\Http\Controllers;

use App\Actions\Game\DeleteGameAction;
use App\Actions\Game\StoreGameAction;
use App\DTOs\GameDTO;
use App\Http\Requests\Games\DeleteGameRequest;
use App\Http\Requests\Games\StoreGameRequest;
use App\Models\Game;

class GameController extends Controller
{
    public function index()
    {
        return response()->json(Game::all());
    }

    public function count()
    {
        return response()->json(Game::count());
    }

    public function store(StoreGameRequest $request, StoreGameAction $action)
    {
        $dto = GameDTO::fromRequest($request);

        $action->execute($dto);

        return response()->json([
            'message' => 'Jeu ajouté avec succès',
        ], 201);
    }

    public function destroy(Game $game)
    {
        $game->delete();

        return response()->json([
            'message' => 'Jeu supprimé avec succès',
        ], 200);

    }
}
