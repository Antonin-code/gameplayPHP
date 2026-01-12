<?php

namespace App\DTOs;

use App\Http\Requests\Games\StoreGameRequest;
use App\Models\Game;

final class GameDTO
{
    private function __construct(
        public string $name,
        public string $description,
        public int    $playTime,
        public int    $players
    )
    {
    }

    public static function fromRequest(StoreGameRequest $request): self
    {
        return new self(
            name: $request->name,
            description: $request->description,
            playTime: $request->playTime,
            players: $request->players,
        );
    }
}
