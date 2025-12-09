<?php

namespace App\Models;

class Movie
{
    protected $table ='movies';

    public $timestamps = true;

    protected $fillable = [
        'title',
        'description',
        'duration',
        'release_date',
        'rating',
    ];
}
