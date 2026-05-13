<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $comics = config('comics');

    return view('comics.index', compact('comics'));
});
