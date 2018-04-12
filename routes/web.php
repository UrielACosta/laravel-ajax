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


Route::get('/teste', function () {
    return view('usuarios');
});

Route::get('/', 'UsuarioController@index')->name('usuarios');
Route::get('/listar-usuarios', 'UsuarioController@getUsuarios');


Auth::routes();

Route::get('/home', 'homeController@index')->name('home');
