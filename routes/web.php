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

//HOME

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

//Metodo BUONO

Route::get('/metodo-buono', function () {
    return view('landing.buono');
})->name('buono');

//LANDING
Route::get('/food-marketing', function () {
  return view('landing.google');
})->name('landing');

Route::get('/consulenza-gratuita', function () {
  return view('landing.futuro');
})->name('futuro');

Route::get('/grazie', function () {
  return view('landing.thankyou');
})->name('grazie');

//SERVIZI

Route::get('/agenzia-food-marketing-campania', function () {
    return view('servizi');
})->name('digital');

Route::get('/servizi/visual', function () {
    return view('servizi');
})->name('visual');



//PORTFOLIO

Route::get('/portfolio/settefrese', function () {
    return view('lavoro');
})->name('settefrese');

Route::get('/portfolio/percorsi', function () {
    return view('lavoro');
})->name('percorsi');

Route::get('/portfolio/cucu', function () {
    return view('lavoro');
})->name('cucu');

Route::get('/portfolio/giannattasio', function () {
    return view('lavoro');
})->name('giannattasio');

Route::get('/portfolio/colella', function () {
    return view('lavoro');
})->name('colella');
