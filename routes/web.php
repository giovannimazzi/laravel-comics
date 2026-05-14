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

Route::get('/tv', function () {
    return view('pages.tv');
})->name('tv');

Route::get('/games', function () {
    return view('pages.games');
})->name('games');

Route::get('/collectibles', function () {
    return view('pages.collectibles');
})->name('collectibles');

Route::get('/videos', function () {
    return view('pages.videos');
})->name('videos');

Route::get('/fans', function () {
    return view('pages.fans');
})->name('fans');

Route::get('/news', function () {
    return view('pages.news');
})->name('news');

Route::get('/shop', function () {
    return view('pages.shop');
})->name('shop');