<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MovieController extends Controller
{
    public function movies(){

        $moviesList = Movie::orderBy('vote', 'desc')->get();
        
        return view("movies", [
            "movies" => $moviesList
        ]);
    }
}
