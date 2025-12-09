<?php

namespace App\Models;

class Serie
{
    protected $table ='series';

    public $timestamps = true;

    protected $filliable = [
        'title',
        'description',
        'duration',
        'release_date',
        'rating'
    ];
}
