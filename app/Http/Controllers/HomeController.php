<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use TCG\Voyager\Models\Category;

class HomeController extends Controller
{
    use AuthenticatesUsers;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::take(50)->get();
        $categories = Category::whereNull('parent_id')->get();

        return view('home', ['allProducts' => $products, 'categories' => $categories]);
    }
}
