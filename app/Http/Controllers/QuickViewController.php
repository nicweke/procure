<?php

namespace App\Http\Controllers;

use App\Product;

class QuickViewController extends Controller
{
    public function quick($id)
    {
        $product = Product::where('id', $id)->first();

        return view('_single_product')->with(compact('product'));
    }
}
