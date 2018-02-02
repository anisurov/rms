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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Routes, Handles Error exceptions [START]*/
Route::get('404',['as'=>'404','uses'=>'ErrorHandleController@errorCode404']);

Route::get('405',['as'=>'405','uses'=>'ErrorHandleController@errorCode405']);
/*Routes, Handles Error exceptions [END]*/

