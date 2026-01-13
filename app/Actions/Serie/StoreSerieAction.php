<?php

namespace App\Actions\Serie;

use App\DTOs\SerieDTO;
use App\Http\Requests\Movies\StoreMovieRequest;
use App\Models\Movie;
use App\Models\Serie;

class StoreSerieAction
{
    public function storeMovie(SerieDto $dto): Serie
    {
        return DB::transaction(function () use ($dto) {
            return Movie::create([
                'title' => $dto->title,
                'description' => $dto->description,
                'release_date' => $dto->release_date,
                'duration' => $dto->duration,
                'rating' => $dto->rating,
            ]);

        });
    }
}
