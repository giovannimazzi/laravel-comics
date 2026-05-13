<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $comics = config('comics');

    return view('comics.index', compact('comics'));
})->name('comics.index');

Route::get('/characters', function () {
    return view('pages.characters');
})->name('characters');

Route::get('/movies', function () {
    return view('pages.movies');
})->name('movies');