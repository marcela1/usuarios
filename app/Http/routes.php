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
Route::get('/usuarios', 'ejemploController@mostrarUsuarios');
Route::get('/eliminarUsuario/{id}', 'ejemploController@eliminarUsuario');
Route::get('/registrarUsuario','ejemploController@registrarUsuario');
Route::post('/guardarUsuario', 'ejemploController@guardarUsuario');
Route::get('/modificarUsuario/{id}','ejemploController@modificarUsuario');
Route::post('/actualizarUsuario/{id}', 'ejemploController@actualizarUsuario');
Route::get('/pdfUsuarios/{id}','ejemploController@pdfUsuarios');

Route::get('/clientes', 'ejemploController@mostrarClientes');
Route::get('/eliminarCliente/{id}', 'ejemploController@eliminarClientes');
Route::get('/registrarCliente','ejemploController@registrarCliente');
Route::post('/guardarCliente', 'ejemploController@guardarCliente');
Route::get('/modificarCliente/{id}','ejemploController@modificarCliente');
Route::post('/actualizarCliente/{id}', 'ejemploController@actualizarCliente');
Route::get('/pdfClientes/{id}','ejemploController@pdfClientes');

Route::get('/proyectos', 'ejemploController@mostrarProyectos');
Route::get('/eliminarProyecto/{id}', 'ejemploController@eliminarProyecto');
Route::get('/registrarProyecto','ejemploController@registrarProyecto');
Route::post('/guardarProyecto', 'ejemploController@guardarProyecto');
Route::get('/modificarProyecto/{id}','ejemploController@modificarProyecto');
Route::post('/actualizarProyecto/{id}', 'ejemploController@actualizarProyecto');


Route::get('/requisitos', 'ejemploController@mostrarRequisitos');
Route::get('/eliminarRequisito/{id}', 'ejemploController@eliminarRequisito');
Route::get('/registrarRequisito','ejemploController@registrarRequisito');
Route::post('/guardarRequisito', 'ejemploController@guardarRequisito');
Route::get('/modificarRequisito/{id}','ejemploController@modificarRequisito');
Route::post('/actualizarRequisito/{id}', 'ejemploController@actualizarRequisito');
Route::get('/pdfRequisitos/{id}','ejemploController@pdfRequisitos');
Route::get('/pdfRequisito/{id}','ejemploController@pdfRequisito');

Route::get('/asignarUsuarios', 'ejemploController@asignarUsuarios');
Route::post('/seleccionarUsuarios','ejemploController@seleccionarUsuarios');
Route::post('/actualizarUsuariosProyectos/{id}','ejemploController@actualizarUsuariosProyectos');
Route::get('/pdfProyectos/{id}','ejemploController@pdfProyectos');

Route::get('/asignarRequisitos', 'ejemploController@asignarRequisitos');
Route::post('/seleccionarRequisitos','ejemploController@seleccionarRequisitos');


Route::post('/actualizarUsuariosRequisitos/{id}','ejemploController@actualizarUsuariosRequisitos');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home/{nombre}/{edad}','ejemploController@index');

