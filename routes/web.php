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
    return redirect('/sales');
});


Route::get('/sales','SohnenSalesController@index')->name('sales.index')->middleware('auth');

//
//Route::get('/getAttribute/{sku}','AttributesController@Index');
//Route::get('/attributes/{attribute}','AttributesController@show');

//
//Route::apiResource('products','ProductsController');
//
Route::resource('users','UsersController');
//
//Route::post('/customers/saveMemory','CustomersController@saveMemory')->name('customers.saveMemory');
//Route::post('/customers/removeMemory','CustomersController@removeMemory')->name('customers.removeMemory');
//
//Route::get('/quotations','QuotationsController@index')->name('quotations.index');
//Route::post('/quotations','QuotationsController@store')->name('quotations.store');
//Route::delete('/quotations/{quotation}','QuotationsController@destroy')->name('quotations.destroy');

Auth::routes();
