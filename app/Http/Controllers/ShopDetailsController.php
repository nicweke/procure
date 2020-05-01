<?php

namespace App\Http\Controllers;

use App\Shop;
use Illuminate\Http\Request;

class ShopDetailsController extends Controller
{
    public function shopdetails(Request $request, $id)
    {

        $shop = Shop::where('id', $id)->first();

        $shopProducts = $shop->products()->get();

        if ($shopProducts) {
            return view('shops.detail', ['shopProducts' => $shopProducts]);

        }

    }

}
