<?php

namespace App\Http\Controllers;

use App\Shop;
use Illuminate\Http\Request;

class ShopViewController extends Controller
{
    public function index()
    {
        $shopview = Shop::paginate(10);

        return view('/shopview', ['allShopViews' => $shopview]);
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $shops = Shop::where('name', 'LIKE', "%$search%")->get();

        return view('shops.catalog', compact('shops'));

    }
}
