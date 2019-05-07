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
Route::get('/lomba', 'LombaController@index');
Route::post('/lomba/create', 'LombaController@create');
Route::get('/lomba/{id}/edit','LombaController@edit');
Route::post('/lomba/{id}/update','LombaController@update');
Route::get('/lomba/{id}/delete','LombaController@delete');