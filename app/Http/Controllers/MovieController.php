<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Serie;

class MovieController extends Controller
{
    public function index()
    {
        return response()->json(Movie::all());
    }

    public function count(){
        return response()->json(Movie::count());
    }
}
