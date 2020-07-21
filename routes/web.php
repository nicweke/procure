<?php

//Routes

Route::redirect('/', '/home');
Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Auth::routes(['verify' => true]);

Auth::routes();
// Terms and Conditions
Route::get('/terms', function () {
    return view('term');
})->name('terms');
Route::get('/refund', function () {
    return view('refund');
})->name('refund');
Route::get('/faqs', function () {
    return view('faqs');
})->name('faqs');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/support', function () {
    return view('support');
})->name('support');

//flutterwave
Route::get('/success', function () {
    return view('success');
});
Route::get('/failed', function () {
    return view('failed');
});

//Route::get('/quickview', 'QuickViewController@quick')->name('quick');
Route::get('/product/all', 'ProductController@allproducts')->name('product.all');
Route::get('/product/{id}', 'ProductController@product')->name('productdetails');
Route::get('/products/search', 'ProductController@search')->name('products.search');

Route::get('/shops/intro', 'ShopController@intro')->name('shop.intro');

//5 star rating
Route::post('posts', 'RatesController@store')->name('posts.post');

//Route::get('/order-download', 'OrderController@pdfdownload');

Route::resource('review', 'ProductReviewController');

Route::get('/verifyOTP', 'VerifyOTPController@showVerifyForm');
Route::post('/verifyOTP', 'VerifyOTPController@verify');
Route::post('/resend_otp', 'ResendOTPController@resend');

//Route::get('/quickview', function () {return view('_single_product');});

Route::get('/track', 'TrackController@index')->name('track');
Route::post('/track', 'TrackController@store')->name('track.store');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/shops/search', 'ShopViewController@search')->name('shops.search');
    Route::get('/shops/new', 'ShopController@new')->name('shop.new');
    Route::get('/shops/{id}', 'ShopDetailsController@shopdetails')->name('sdetail');
    Route::get('/shopview', 'ShopViewController@index')->name('shopview');
    Route::resource('shops', 'ShopController');

    Route::get('/approval/download', 'ApprovalController@download')->name('adownload');
    Route::get('/approval', 'ApprovalController@load')->name('approval');
    Route::post('/approval', 'ApprovalController@store')->name('approval.post');
    //Admin banner routes
    Route::get('/', 'BannersController@addBanner')->name('banner');

    Route::get('/WishList', 'ProductController@View_wishList');
    Route::post('addToWishList', 'ProductController@addWishList')->name('addToWishList');
    Route::get('/removeWishList/{id}', 'ProductController@destroyWishList');

    Route::get('/order-invoice', 'OrderController@viewOrderInvoice')->name('order.invoice');

    Route::get('/order-update', 'OrderController@updateorder')->name('update');
    //Route::get('/approval-order', 'OrderController@approval')->name('approval-order');
    Route::resource('orders', 'OrderController');

    Route::get('/add-to-cart/{product}', 'CartController@add')->name('cart.add');
    Route::get('/cart', 'CartController@index')->name('cart.index');
    Route::get('/cart/destroy/{itemId}', 'CartController@destroy')->name('cart.destroy');
    Route::get('/cart/update/{itemId}', 'CartController@update')->name('cart.update');
    Route::get('/cart/checkout', 'CartController@checkout')->name('cart.checkout');
    Route::get('/cart/apply-coupon', 'CartController@applyCoupon')->name('cart.coupon');

    Route::resource('products', 'ProductController');

    Route::post('/quote/{id}', 'QuoteResponseController@verify');

    Route::get('/cart/flutter', 'FlutterController@view')->name('flutter');
    Route::match(['GET', 'POST'], '/pay', 'FlutterController@initialize')->name('pay');
    Route::get('/rave/callback', 'FlutterController@callback')->name('callback');

    Route::get('/my-profile', 'UsersController@edit')->name('users.edit');
    Route::patch('/my-profile', 'UsersController@update')->name('users.update');

    Route::get('/my-list', 'ProfiloController@index')->name('profilo.index');

    Route::get('/quote/{id}', 'QuotationController@index');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
