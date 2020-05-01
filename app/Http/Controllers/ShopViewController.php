<?php

namespace App\Http\Controllers;

use App\Shop;

class ShopViewController extends Controller
{
    public function index()
    {
        $shopview = Shop::take(10)->get();

        return view('/shopview', ['allShopViews' => $shopview]);
    }
}
