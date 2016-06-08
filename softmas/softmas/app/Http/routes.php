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

//Route para página inicial
Route::get('/', 'PagesController@inicio');


//Route para página clientes
Route::get('/clientes', 'PagesController@clientes');

//Route para crear clientes
Route::post('/clientes/crearCliente', 'PagesController@crearCliente');


//Route para página cotizar
Route::get('/cotizar', 'PagesController@cotizar');


//Route para página empresas
Route::get('/empresas', 'PagesController@empresas');

//Route para página empresas
Route::get('/crearEmpresa', 'PagesController@crearEmpresa');

//Route para crear empresas
Route::post('/crearEmpresa', 'PagesController@crearEmpresaRequest');


//Route para página parametros
Route::get('/parametros', 'PagesController@parametros');


//Route para página resultado
Route::get('/resultado', 'PagesController@resultado');


//Route para página usuarios
Route::get('/usuarios', 'PagesController@usuarios');

//Route para crear usuarios
Route::post('/usuarios/crearUsuario', 'PagesController@crearUsuario');


//Route para página cotizacion
Route::get('/cotizacion', 'PagesController@cotizacion');

//Route para página consulta
Route::get('/consulta', 'PagesController@consulta');
