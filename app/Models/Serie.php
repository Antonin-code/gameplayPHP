<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Serie extends Model
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
