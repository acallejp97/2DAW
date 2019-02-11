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

Route::get('/', 'Controller@inicio')->name('home');

Auth::routes();
Route::get('/logout', 'HomeController@logout');

Route::get('/galeria', 'Controller@mostrarGaleria')->name('galeria');
Route::get('/crear', 'Controller@crearCuadro')->name('crear');
Route::post('/subirCuadro', 'Controller@subirCuadro')->name('subirCuadro');
