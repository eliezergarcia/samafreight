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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'HomeController@dashboardIndex')->name('dashboard');

Route::get('/usuarios/listar', 'UserController@list')->name('usuarios.list');
Route::post('/usuarios/activar/{id}', 'UserController@activate')->name('usuarios.activate');
Route::delete('/usuarios/desactivar/{id}', 'UserController@deactivate')->name('usuarios.deactivate');
Route::resource('usuarios', 'UserController');

Route::get('/tractores/listar', 'TruckController@list')->name('tractores.list');
Route::post('/tractores/activar/{id}', 'TruckController@activate')->name('tractores.activate');
Route::delete('/tractores/desactivar/{id}', 'TruckController@deactivate')->name('tractores.deactivate');
Route::get('/tractores/relacionesCrear', 'TruckController@relationsCreate')->name('tractores.relationsCreate');
Route::get('/tractores/relaciones/{id}', 'TruckController@relations')->name('tractores.relations');
Route::get('/tractores/buscarPlacas/{id}', 'TruckController@findPlates')->name('tractores.findPlates');
Route::get('/tractores/status/{id}', 'TruckController@status')->name('tractores.status');
Route::resource('tractores', 'TruckController');

Route::get('/puntosInspeccion/listar', 'InspectionPointController@list')->name('puntosInspeccion.list');
Route::get('/puntosInspeccion/listarTTI', 'InspectionPointController@listTTI')->name('puntosInspeccion.listTTI');
Route::resource('puntosInspeccion', 'InspectionPointController');

Route::get('/cajas/listar', 'BoxController@list')->name('cajas.list');
Route::post('/cajas/activar/{id}', 'BoxController@activate')->name('cajas.activate');
Route::delete('/cajas/desactivar/{id}', 'BoxController@deactivate')->name('cajas.deactivate');
Route::post('/cajas/movimientos/{id}', 'BoxController@movimientos')->name('cajas.movimientos');
Route::get('/cajas/relacionesCrear', 'BoxController@relationsCreate')->name('cajas.relationsCreate');
Route::get('/cajas/relaciones/{id}', 'BoxController@relations')->name('cajas.relations');
Route::get('/cajas/buscarPlacas/{id}', 'BoxController@findPlates')->name('cajas.findPlates');
Route::resource('cajas', 'BoxController');

Route::resource('inspecciones', 'InspectionController');
Route::resource('mantenimientos', 'MaintenanceController');
