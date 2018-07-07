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

Route::get('/', 'HomeController@welcome');
Route::post('/registro', 'AdminController@registro');
Route::get('/salir', 'AdminController@salir');
Auth::routes();
Route::get('/home', 'AdminController@admin')->middleware('auth');
Route::get('/admin', 'AdminController@admin')->middleware('auth');

Route::get('/evento', 'EventosController@index')->middleware('auth');
Route::get('/eventoalta', 'EventosController@alta')->middleware('auth');
Route::post('/eventoalta', 'EventosController@postalta')->middleware('auth');
Route::get('/eventobaja/{id}', 'EventosController@baja')->middleware('auth');

Route::get('/orden', 'OrdenesController@index')->middleware('auth');
Route::get('/ordenalta', 'OrdenesController@alta')->middleware('auth');
Route::post('/ordenalta', 'OrdenesController@postalta')->middleware('auth');
Route::get('/ordenbaja/{id}', 'OrdenesController@baja')->middleware('auth');

Route::get('/news', 'UsuariosController@index')->middleware('auth');
