<?php

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
    return view('home');
})->name('home');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

Route::get('/contattaci', function () {
    return view('push');
})->name('contatti');

Route::get('/#metodo', function () {
    return view('push');
})->name('come');

Route::get('/#cosa-facciamo', function () {
    return view('push');
})->name('cosa');

Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/metodo-buono', function () {
    return view('landing.buono');
})->name('buono');
