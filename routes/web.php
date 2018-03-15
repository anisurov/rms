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
Route::get('/tableReserve', 'tableController@index')->middleware(['auth']);
Route::get('/eventReserve', 'eventController@index')->middleware(['auth']);
Route::get('/reservation', 'eventController@showAllreservation')->middleware(['auth','execuser']);
Route::get('/reservation2', 'eventController@showAllreservation2');
Route::post('/reservation', 'eventController@approveReservation')->middleware(['auth','execuser']);
Route::get('/users', 'userController@index')->middleware(['auth','execuser']);
Route::get('/table_reservation2', 'tableController@showAllreservation2');
Route::get('/table_reservation', 'tableController@showAllreservation')->middleware(['auth','execuser']);
Route::post('/table_reservation', 'tableController@approveReservation')->middleware(['auth','execuser']);
Route::get('/onlineorder', 'OnlineOrderController@showAllOrder')->middleware(['auth','execuser']);
Route::post('/onlineorder', 'OnlineOrderController@approve')->middleware(['auth','execuser']);
Route::get('/upadte/rating', 'RatingController@update')->name('rating')->middleware(['auth','execuser']);

/*Routes, Handles Error exceptions [START]*/
Route::get('404',['as'=>'404','uses'=>'ErrorHandleController@errorCode404']);
Route::post('upload', 'UploadController@upload');
Route::post('/addcategory2', 'CategoryController@add');
Route::post('/tableReserve2', 'tableController@reserve');
Route::post('/eventReserve2', 'eventController@reserve');
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
Route::get('checkout','checkoutController@index');
/*Routes for cart [START]*/

/**---------------------[Review]........................**/

Route::get('review/addform','ReviewController@showAddForm')->name('reviewform')->middleware(['auth']);
Route::post('review/add','ReviewController@store')->name('savereview')->middleware(['auth']);
Route::get('review/updateform','ReviewController@showUpdateForm')->name('reviewupdatewform')->middleware(['auth']);
Route::post('review/update','ReviewController@update')->name('updatereview')->middleware(['auth']);
