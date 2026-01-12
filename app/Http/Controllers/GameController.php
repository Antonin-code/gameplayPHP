<?php

namespace App\Http\Controllers;

use App\Actions\Game\StoreGameAction;
use App\DTOs\GameDTO;
use App\Http\Requests\Games\StoreGameRequest;
use App\Models\Game;

class GameController extends Controller
{
    public function index()
    {
        return response()->json(Game::all());
    }

    public function store(StoreGameRequest $request, StoreGameAction $action)
    {
        $dto = GameDTO::fromRequest($request);

        $action->execute($dto);

        return redirect()->route('games.index');
    }
}
