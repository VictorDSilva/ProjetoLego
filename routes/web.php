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

Route::resource('kits', 'KitController');
Route::resource('pecas', 'PecaController');
Route::get('/peca/api/', 'PecaController@getPeca');
Route::post('/peca/api/show/', 'PecaController@showPeca');

Route::post('/peca/api/{id}', 'PecaController@storeAPI');