<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','IndexController@index')->name('inicio');
Route::get('Noticias/Ver/{id}','IndexController@ver')->name('ver');
Auth::routes();

Route::group(['middleware' => 'auth'],function(){
	Route::get('/home', 'HomeController@index')->name('home');

	//Rutas de usuarios
	Route::get('users/index','UserController@index')->name('admin.usuarios.inicio');
	Route::get('users/crear','UserController@create')->name('admin.usuarios.crear');
	Route::get('users/editar/{id}','UserController@edit')->name('admin.usuarios.editar');
	Route::post('users/mod/{id}','UserController@update')->name('admin.usuarios.modificar');
	Route::get('users/eliminar','UserController@destroy')->name('admin.usuarios.eliminar');
	Route::post('usuarios/guardar','UserController@save')->name('admin.usuarios.guardar');

	//Rutas de noticias
	Route::get('noticias/index','NoticiasController@index')->name('admin.noticias.inicio');
	Route::get('noticias/crear','NoticiasController@create')->name('admin.noticias.crear');
	Route::post('noticias/guardar','NoticiasController@save')->name('admin.noticias.guardar');
	Route::get('noticias/editar/{id}','NoticiasController@edit')->name('admin.noticias.editar');
	Route::post('noticias/modificar/{id}','NoticiasController@update')->name('admin.noticias.modificar');
	Route::get('noticias/eliminar','NoticiasController@destroy')->name('admin.noticias.eliminar');
	Route::get('noticias/vista_previa/{id}','NoticiasController@view')->name('admin.noticias.ver');

});
