<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $msg = 'Hello World';
    return view('home', compact('msg'));
});

Route::get('/about', function () {
    $title = 'Oldboy';
    $genre = 'Drama';
    $directer = 'Chan Wook Park';
    $movies = ['Mr vendetta', 'thirst', 'handmaden', 'sympathy for mr vendetta'];
    return view('about', compact( 'title', 'genre', 'directer', 'movies'));
});
