<?php

namespace App\Actions\Movie;

use App\DTOs\MovieDTO;
use App\Models\Movie;
use Illuminate\Support\Facades\DB;

class StoreMovieAction
{
    public static function execute(MovieDTO $dto):Movie
    {
        return DB::transaction(function () use ($dto)
        {
            return Movie::create([
                'title' => $dto->title,
                'description' => $dto->description,
                'release_date' => $dto->release_date,
                'rating' => $dto->rating,
            ]);
        });
    }
}
