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

Route::resource('pelusis', 'PelusiController');
Route::resource('amigos', 'AmigoController');
Route::resource('eventos', 'EventoController');
Route::resource('piezas', 'PiezaController');
Route::resource('artesanias', 'ArtesaniaController');

Route::get('/redsocialamigo/create/{amigo}', 'RedsocialamigoController@create')->name('redsocial.create');
Route::post('/redsocialamigo', 'RedsocialamigoController@store')->name('redsocial.store');
Route::get('/redsocialamigo/{amigo}','RedsocialamigoController@index')->name('redsocialamigo.index');
Route::delete('/redsocialamigo/{redsocial}','RedsocialamigoController@destroy')->name('redsocial.destroy');
Route::get('/redsocialamigo/{redsocial}/edit','RedsocialamigoController@edit')->name('redsocial.edit');
Route::put('/redsocialamigo/{redsocial}','RedsocialamigoController@update')->name('redsocial.update');
