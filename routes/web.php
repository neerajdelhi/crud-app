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

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'EmployesController@index')->name('home');
Route::get('/create', 'EmployesController@create')->name('create');
Route::get('/edit/', 'EmployesController@edit')->name('edit');
Route::post('/create/store', 'EmployesController@store')->name('store');
Route::post('/edit/{id}', 'EmployesController@update')->name('update');
Route::delete('/edit/delete/{id}','EmployesController@destroy')->name('destroy');
