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
    $comics = config('data.comics');
    $dati = [
        'comics' => $comics
    ];
    return view('home', $dati);
});

Route::get('/fumetto', function () {
    return view('fumetto');
});
