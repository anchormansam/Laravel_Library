<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/addbook/create', 'AddBookController@index');
Route::get('/addbook', 'AddBookController@create');
Route::post('/addbook', 'AddBookController@store');
Route::get('/bookview/{title}', 'BookviewController@viewbook');
Route::get('/checkout', 'CheckoutController@index');
Route::post('/bookview/checkout', 'CheckoutController@checkout');
Route::post('/bookview/update', 'CheckoutController@update');

// Route::post('/bookview/checkout', 'CheckoutController@destroy');





