<?php

use Illuminate\Support\Facades\Route;

Route::get('/', "MovieController@index")->name("movies");


