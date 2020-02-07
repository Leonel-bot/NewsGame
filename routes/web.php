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



Route::get('/Noticias', 'NoticiaController@index')->name('Noticias');
Route::get('/Noticias/{id}', 'NoticiaController@show')->name('lista');
Route::post('/Edit', 'NoticiaController@edit');
Route::get('/Editar/{id}', 'NoticiaController@editar');
Route::get('/Borrar/{id}', 'NoticiaController@destroy');

Route::view('/Contacto', 'Noticias.contacto');


Route::view('/Redactar', 'Noticias.redactar');
Route::post('/Redactar', 'NoticiaController@create');


Route::post('//Noticias/{id}/Comentar', 'ComentarioController@create');