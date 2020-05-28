<?php

namespace App\Http\Controllers;

use App\Product;

class QuotationController extends Controller
{

    public function index($id)
    {

        $products = Product::where('id', $id)->first();

        return view('quote')->with(compact('products'));

        // $products = DB::table('products')->get();
        // $products = Product::where('id', $id)->first();
        //return view('quote')->with(compact('products'));

    }

}
