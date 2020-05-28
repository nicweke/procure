<?php

Route::redirect('/', '/home');

Auth::routes();
// Terms and Conditions
Route::get('/terms', function () {
    return view('term');
});
//
Route::post('/checkout-encryption', function () {
    return view('checkout-encryption');
});

//Route::post('/pay', 'RaveController@initialize')->name('pay');
//Route::post('/rave/callback', 'RaveController@callback')->name('callback');
//Route::post('/receivepayment', 'RaveController@webhook')->name('webhook');

//5 star rating
Route::get('posts', 'RateController@posts')->name('posts');
Route::post('posts', 'RateController@posts')->name('posts.post');
Route::get('posts/{id}', 'RateController@posts')->name('posts.show');

Route::get('/WishList', 'ProductController@View_wishList');
Route::post('addToWishList', 'ProductController@addWishList')->name('addToWishList');
Route::get('/removeWishList/{id}', 'ProductController@destroyWishList');

Route::get('/order-invoice', 'OrderController@viewOrderInvoice')->name('order.invoice');

//Route::get('/order-download', 'OrderController@pdfdownload');

Route::resource('review', 'ProductReviewController');

Route::get('/quote/{id}', 'QuotationController@index');

Route::post('/quote/{id}', 'QuoteResponseController@verify');

Route::get('/verifyOTP', 'VerifyOTPController@showVerifyForm');
Route::post('/verifyOTP', 'VerifyOTPController@verify');
Route::post('/resend_otp', 'ResendOTPController@resend');

Route::get('/add-to-cart/{product}', 'CartController@add')->name('cart.add');
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::get('/cart/destroy/{itemId}', 'CartController@destroy')->name('cart.destroy');
Route::get('/cart/update/{itemId}', 'CartController@update')->name('cart.update');
Route::get('/cart/checkout', 'CartController@checkout')->name('cart.checkout');
Route::get('/cart/apply-coupon', 'CartController@applyCoupon')->name('cart.coupon');
//Route::get('/cart', 'CartController@applyTax')->name('cart.tax');

Route::get('/my-profile', 'UsersController@edit')->name('users.edit');
Route::patch('/my-profile', 'UsersController@update')->name('users.update');

Route::get('/my-list', 'ProfiloController@index')->name('profilo.index');

Route::resource('orders', 'OrderController');

//Route::match(['get', 'post'], 'products/filter', 'ProductController@filter');
Route::get('/product/all', 'ProductController@allproducts')->name('product.all');
Route::get('/product/{id}', 'ProductController@product');

Route::get('/products/search', 'ProductController@search')->name('products.search');
Route::resource('products', 'ProductController');

Route::get('/shops/intro', 'ShopController@intro')->name('shop.intro');
Route::get('/shops/new', 'ShopController@new')->name('shop.new');
Route::get('/shops/{id}', 'ShopDetailsController@shopdetails');
Route::get('/shopview', 'ShopViewController@index')->name('shopview');
Route::resource('shops', 'ShopController');

Route::group(['middleware' => 'TwoFA'], function () {
    Route::get('/home', 'HomeController@index')->name('home');

});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

//Admin banner routes
    // Route::match(['get', 'post'], '/admin/add-banner', 'BannersController@addBanner');
});
