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

Route::get('/', 'HomeController@getHome');

Route::get('login', function () {
    return view('auth.login');
});

// Route::get('logout', function () {
//     return view('auth.login');
// });

Route::group(['middleware' => 'domingo'], function () {
    Route::get('probando/ruta', function () {

        return 'get';
    });
    Route::post('probando/ruta', function () {
        return 'post';
    });

});
Route::get('catalog', 'CatalogController@getIndex');

Route::get('catalog/show/{id}', 'CatalogController@getShow');

Route::get('catalog/create', 'CatalogController@getCreate');

Route::get('test', ['middleware' => 'domingo', function () {
    return 'Probando ruta con middleware';
}]);

Route::get('catalog/edit/{id}', 'CatalogController@getEdit');
