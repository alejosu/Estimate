<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/clientes', function () {
  return view('pages.clientes');
});

Route::get('/cotizar', function() {
  return view('pages.cotizar');
});

Route::get('/empresas', function() {
  return view('pages.empresas');
});

Route::get('/parametros', function() {
  return view('pages.parametros');
});

Route::get('/resultado', function() {
  return view('pages.resultado');
});

Route::get('/usuarios', function() {
  return view('pages.usuarios');
});

Route::get('/cotizacion', function() {
  return view('pages.cotizacion');
});
