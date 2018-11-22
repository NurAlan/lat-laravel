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

Route::get('/','DashController@index');
Route::get('/create','DashController@create');
Route::post('/store','DashController@store');
Route::get('/edit/{id}','DashController@edit');
Route::post('/update','DashController@update');
Route::get('/softdelete/{id}','DashController@delete');
Route::get('deleted','DashController@trash');