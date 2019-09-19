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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/bienvenida/{nombre}', function ($nombre) {
    dd($nombre);
    return view('landing-page', compact('nombre'));//->with(['nombre' => $nombre]);
});

Route::get('/contacto', function () {
    return view('contacto');
});