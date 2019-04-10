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
});*/
Route::get('/','frontcontroller@index');

Route::post('/generate-save','MubinController@store');
Route::get('/generate/save','MubinController@index');

Route::get('/generate/save/studentEdit/{id}','MubinController@edit');
Route::post('/generate/save/studentEdit/studentUpdate/{id}','MubinController@update');
Route::get('/generate/save/studentDelete/{id}','MubinController@destroy');
Route::get('/generate/save/clear/','MubinController@create');
Route::get('/generate/save/go/','MubinController@go');
Route::get('/generate/save/second/','MubinController@sec');
Route::post('/generate-save-second','OpolController@store');
Route::get('generate/save/second/clear2/','OpolController@clear');