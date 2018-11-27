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

Route::get('blade', function () {
    return view('pruebapp');
}); 

Route::get('/', function () {
    return view('welcome');
});

Route::get('alumnos', function () {
    return "Mostrando alumnos";
});

Route::get('alumnos/notas/{id}', function ($id) {
    return view('alumnos.notas',array('id'=>$id));
});


Route::get('alumnos/{slug}', function ($slug) {
    return "$slug";
})->where('slug','create|delete|update');

// Route::get('alumnos/{nombre}', function ($nombre) {
//     return "Mostrando alumnos $nombre";
// })->where('nombre','[A-Za-z]+');

Route::get('alumnos/{nombre}/{apellido?}', function ($nombre, $apellido=null) {
    if($apellido==null){
        return "Mostrando alumno con nombre $nombre";
    }else{

        return "Mostrando alumno $nombre con apellido $apellido";
    }
});

Route::get('alumnos/{edad}', function ($edad) {
    return "Mostrando $edad";
})->where('edad','[0-9]+');

Route::get('alumnos/{nombre}/{edad}', function ($nombre, $edad) {
    return "Mostrando alumno $nombre con edad $edad";
})->where(['nombre','[A-Za-z]+'],['edad','[0-9]+']);


