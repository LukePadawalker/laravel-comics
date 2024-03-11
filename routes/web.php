<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// rotta home
Route::get('/', function () {
    return view('home');
});

// rotta characters
Route::get('/characters', function () {
    return view('header_menu/characters');
});

// rotta collectibles
Route::get('/colectibles', function () {
    return view('header_menu/collectibles');
});

// rotta comics
Route::get('/comics', function () {
    return view('header_menu/comics');
});

// rotta fans
Route::get('/fans', function () {
    return view('header_menu/fans');
});

// rotta games
Route::get('/games', function () {
    return view('header_menu/games');
});

// rotta movies
Route::get('/movies', function () {
    return view('header_menu/movies');
});

// rotta news
Route::get('/news', function () {
    return view('header_menu/news');
});

// rotta shop
Route::get('/shop', function () {
    return view('header_menu/shop');
});

// rotta tv
Route::get('/tv', function () {
    return view('header_menu/tv');
});

// rotta videos
Route::get('/videos', function () {
    return view('header_menu/videos');
});

// rotta product
Route::get('/products/{id}', function ($index) {
    $products = config('comics');

    return view('product', ['product' => $products[$index]]);
});