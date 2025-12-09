<?php

namespace App\Models;

class Game
{
    protected $table = "games";

    public $timestamps = true;

    protected $fillable = [
        'name',
        'description',
        'playTime',
        'players',
    ];
}
