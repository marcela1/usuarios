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
    return view('welcome');
});
Route::get('/registrarUsuario','ejemploController@registrarUsuario');
Route::post('/guardarUsuario', 'ejemploController@guardarUsuario');

Route::get('/modificarUsuario/{id}','ejemploController@modificarUsuario');
Route::post('/actualizarUsuario/{id}', 'ejemploController@actualizarUsuario');

Route::get('/eliminarUsuario/{id}', 'ejemploController@eliminarUsuario');
Route::get('/home/{nombre}/{edad}','ejemploController@index');

Route::get('/usuarios', 'ejemploController@mostrarUsuarios');
Route::get('/asignarUsuarios', 'ejemploController@asignarUsuarios');
Route::post('/seleccionarUsuarios','ejemploController@seleccionarUsuarios');