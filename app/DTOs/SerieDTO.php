<?php

namespace App\DTOs;

use App\Http\Requests\Series\StoreSerieRequest;
use App\Models\Serie;

class SerieDTO
{
    public function __construct(
        public string $title,
        public string $description,
        public string $duration,
        public string $release_date,
        public int    $rating,
    )
    {
    }

    public static function formRequest(StoreSerieRequest $request)
    {
        return new self(
            title: $request->title,
            description: $request->description,
            duration: $request->duration,
            release_date: $request->release_date,
            rating: $request->rating,


        );
    }
}
