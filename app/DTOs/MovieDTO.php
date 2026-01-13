<?php

namespace App\DTOs;

use App\Http\Requests\Movies\StoreMovieRequest;
use App\Models\Movie;

class MovieDTO
{
    //Constructeur du DTO
    public function __construct(
        public string $title,
        public string $description,
        public string $release_date,
        public int   $rating,
    )
    {
    }

    //Méthode pour permettre de créer le DTO a partir de la requête validée
    public static function fromRequest(StoreMovieRequest $request): self
    {
        return new self(
            title: $request->title,
            description: $request->description,
            release_date: $request->release_date,
            rating: $request->rating,

        );
    }
}
