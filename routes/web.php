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

/*
Route::get('/', function () {
  $aleatorio = rand(1, 100);
  if($aleatorio % 2 == 0){
      return view('welcome');
  }else{
      return view('pelusa');
  }
});
*/
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/', function () {
  return view('inicio');
});

Route::get('/contacto', function () {
  return view('contacto');
});

//pelusis
Route::get('/pelusis', 'PelusiController@index');
Route::get('/pelusis/create', 'PelusiController@create');
Route::post('/pelusis', 'PelusiController@store')->name('pelusi.store');
Route::get('/pelusis/{id}/destroy', 'PelusiController@destroy')->name('pelusi.destroy');
Route::get('/pelusis/{id}/edit', 'PelusiController@edit')->name('pelusi.edit');
Route::put('/pelusis/{pelusi}', 'PelusiController@update')->name('pelusi.update');

//amigos
Route::get('/amigos', 'AmigoController@index');
Route::get('/amigos/create', 'AmigoController@create');
Route::post('/amigos', 'AmigoController@store')->name('amigo.store');
Route::get('/amigos/{id}/destroy', 'AmigoController@destroy')->name('amigo.destroy');
Route::get('/amigos/{id}/edit', 'AmigoController@edit')->name('amigo.edit');

//eventos
Route::get('/eventos', 'EventoController@index');
Route::get('/eventos/create', 'EventoController@create');
Route::post('/eventos', 'EventoController@store')->name('evento.store');
Route::get('/eventos/{id}/destroy', 'EventoController@destroy')->name('evento.destroy');
Route::get('/eventos/{id}/edit', 'EventoController@edit')->name('evento.edit');

//piezas
Route::get('/piezas', 'PiezaController@index');
Route::get('/piezas/create', 'PiezaController@create');
Route::post('/piezas', 'PiezaController@store')->name('pieza.store');
Route::get('/piezas/{id}/destroy', 'PiezaController@destroy')->name('pieza.destroy');
Route::get('/piezas/{id}/edit', 'PiezaController@edit')->name('pieza.edit');

//artesania
Route::get('/artesania', 'ArtesaniaController@index');
Route::get('/artesania/create', 'ArtesaniaController@create');
Route::post('/artesania', 'ArtesaniaController@store')->name('artesania.store');
Route::get('/artesania/{id}/destroy', 'ArtesaniaController@destroy')->name('artesania.destroy');
Route::get('/artesania/{id}/edit', 'ArtesaniaController@edit')->name('artesania.edit');
