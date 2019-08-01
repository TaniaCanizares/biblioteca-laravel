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
    return view('biblioteca.index');
});

Auth::routes();

Route::get('/biblioteca', 'HomeController@index')->name('home');

Route::post('/biblioteca/{id}', 'LibroController@update');
Route::delete('/users/{id}', 'LibroController@destoy');
// Route::get('/biblioteca/{id}/edit', 'LibroController@edit');
Route::resource('/biblioteca','LibroController');
Route::post('/biblioteca/create','LibroController@store');