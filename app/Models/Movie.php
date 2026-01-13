<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table ='movie';

    public $timestamps = true;

    protected $fillable = [
        'title',
        'description',
        'duration',
        'release_date',
        'rating',
    ];
}
