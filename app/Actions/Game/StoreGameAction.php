<?php

namespace App\Actions\Game;

use App\DTOs\GameDTO;
use App\Models\Game;
use Illuminate\Support\Facades\DB;

class StoreGameAction
{
    public static function execute(GameDTO $dto):Game
    {
        return DB::transaction(function () use ($dto)
        {
            return Game::create([
                'name'=>$dto->name,
                'description'=>$dto->description,
                'playTime'=>$dto->playTime,
                'players'=>$dto->players,
            ]);
        });
    }
}
