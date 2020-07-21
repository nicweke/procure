<?php

use Tabuna\Breadcrumbs\Breadcrumbs;

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

// Home > Products
Breadcrumbs::for('product.all', function ($trail) {
    $trail->parent('home');
    $trail->push('Products', route('product.all'));
});

// Home > Cart
Breadcrumbs::for('cart.index', function ($trail) {
    $trail->parent('home');
    $trail->push('Cart', route('cart.index'));
});

// Home > Cart > Checkout
Breadcrumbs::for('cart.checkout', function ($trail) {
    $trail->parent('cart.index');
    $trail->push('Checkout', route('cart.checkout'));
});
// Home > Cart > Checkout > Order review
Breadcrumbs::for('cart.flutter', function ($trail) {
    $trail->parent('cart.checkout');
    $trail->push('Order Review', route('cart.flutter'));
});

// Home > Products > ProductDetail
Breadcrumbs::for('productdetails', function ($trail, $product) {
    $trail->parent('product.all');
    $trail->push($product, route('productdetails', $product));
});

// Home > Shopview
Breadcrumbs::for('shopview', function ($trail) {
    $trail->parent('home');
    $trail->push('Shops', route('shopview'));
});

// Home > Shopview
Breadcrumbs::for('sdetail', function ($trail, $shop) {
    $trail->parent('shopview');
    $trail->push($shop, url('/shops/{id}', $shop));
});
