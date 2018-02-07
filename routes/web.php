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
Route::get('/uploads', 'UploadController@index');
Route::get('/addcategorys', 'CategoryController@index');
Route::get('/tableReserve', 'TableController@index');

/*Routes, Handles Error exceptions [START]*/
Route::get('404',['as'=>'404','uses'=>'ErrorHandleController@errorCode404']);
Route::post('upload', 'UploadController@upload');
Route::post('/addcategory2', 'CategoryController@add');
Route::post('/tableReserve2', 'TableController@reserve');
Route::get('405',['as'=>'405','uses'=>'ErrorHandleController@errorCode405']);
/*Routes, Handles Error exceptions [END]*/

/*Routes, For Menu,Item [START]*/
Route::get('menu/{id}',['as'=>'menu','uses'=>'MenuItemController@index']);
Route::get('menu',['as'=>'allMenu','uses'=>'MenuItemController@allMenu']);
Route::get('item/{id}',['as'=>'item','uses'=>'MenuItemController@index']);
/*Routes, For Menu,Item [END]*/


/*Routes for cart [START]*/
Route::resource('cart', 'CartController');
Route::delete('emptyCart', 'CartController@emptyCart');
/*Routes for cart [START]*/

