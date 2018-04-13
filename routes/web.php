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



Route::get('/', 'UsuarioController@index')->name('usuarios');

Route::get('/listar-usuarios', 'UsuarioController@getUsuarios');

Route::post('/edit-usuarios', 'UsuarioController@editUsuarios');

Route::get('/list-edit-usuarios', 'UsuarioController@listEditUsuarios');

Route::post('/delete-usuarios', 'UsuarioController@deleteUsuarios');

Route::post('/create-usuarios', 'UsuarioController@createUsuarios');



//Routas do Perfil

Route::post('/create-perfil', 'PerfilController@createPerfil');

Route::get('/listar-perfil', 'PerfilController@getPerfil');

Route::post('/edit-perfil', 'PerfilController@editPerfil');

Route::get('/list-edit-perfil', 'PerfilController@listEditPerfil');

Route::post('/delete-perfil', 'PerfilController@deleteUsuarios');

Route::post('/upload', 'UsuarioController@upload');






Auth::routes();

Route::get('/home', 'homeController@index')->name('home');
