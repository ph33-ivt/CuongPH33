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

Route::get('/cats','CatController@index')->name('list_cat');
//show from create cat
Route::get('/cats/create','CatController@create')->name('created_cat');
Route::post('/cats','CatController@store')->name('create_cat');
//delete cat
Route::get('/delete/{id}','CatController@destroy')->name('delete_cat');
//show cat
Route::get('/breeds/{id}','BreedController@show');


