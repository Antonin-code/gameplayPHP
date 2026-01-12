<?php

namespace App\Http\Controllers;

use App\Models\Serie;

class SerieController extends Controller
{
    public function index(){
        return response()->json(Serie::all());
    }
}
