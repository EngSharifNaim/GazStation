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
Route::post('send_order', 'HomeController@send_order')->name('send_order');
Route::post('send_customer', 'HomeController@send_customer')->name('send_customer');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::post('/in_order', 'HomeController@in_order')->name('in_order');
Route::post('/editPrices', 'HomeController@editPrices')->name('editPrices');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/itemReport/{id}/{period}', 'HomeController@itemReport')->name('itemReport');
Route::get('/sanadReport/{period}', 'HomeController@sanadReport')->name('sanadReport');
Route::get('/customerReport/{id}', 'HomeController@customerReport')->name('customerReport');
Route::post('/customerReport', 'HomeController@customerReport_filter');
Route::get('/customers', 'HomeController@customers')->name('customers');
Route::get('/delete_customer/{id}', 'HomeController@delete_customer')->name('delete_customer');
Route::get('/supliers', 'HomeController@supliers')->name('supliers');
Route::get('/home/tiket/{name}', 'HomeController@tiket')->name('home');
Route::post('/addItem', 'HomeController@addItem')->name('addItem');
Route::post('/newItem', 'HomeController@newItem')->name('newItem');
