<?php

Route::redirect('/', '/home');

Auth::routes();

Route::get('/verifyOTP', 'VerifyOTPController@showVerifyForm');
Route::post('/verifyOTP', 'VerifyOTPController@verify');
Route::post('/resend_otp', 'ResendOTPController@resend');

Route::get('/add-to-cart/{product}', 'CartController@add')->name('cart.add');
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::get('/cart/destroy/{itemId}', 'CartController@destroy')->name('cart.destroy');
Route::get('/cart/update/{itemId}', 'CartController@update')->name('cart.update');
Route::get('/cart/checkout', 'CartController@checkout')->name('cart.checkout');

Route::get('/product/all', 'HomeController@allproducts')->name('product.all');
Route::get('/product/{id}', 'ProductController@product');
Route::get('/products/search', 'ProductController@search')->name('products.search');
Route::resource('products', 'ProductController');

Route::get('/shops/new', 'ShopController@new');
Route::get('/shops/{id}', 'ShopDetailsController@shopdetails');
Route::get('/shopview', 'ShopViewController@index');
Route::resource('shops', 'ShopController');

Route::group(['middleware' => 'TwoFA'], function () {
    Route::get('/home', 'HomeController@index')->name('home');

});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

});
