<?php

use Illuminate\Support\Facades\Route;

Route::get('/', "MovieController@movies")->name("movies");


