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
  $aleatorio = rand(1, 100);
  if($aleatorio % 2 == 0){
      return view('welcome');
  }else{
      return view('pelusa');
  }
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/prueba', function () {
  return view('prueba');
});

Route::get('/pelusis', function () {
  return view('pelusis');
});

Route::get('/amigos', function () {
  return view('amigos');
});

Route::get('/eventos', function () {
  return view('eventos');
});

Route::get('/piezas', function () {
  return view('piezas');
});

Route::get('/artesania', function () {
  return view('artesania');
});

Route::get('/contacto', function () {
  return view('contacto');
});
