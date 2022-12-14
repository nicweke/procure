<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryId = request('category_id');
        $categoryName = null;

        if ($categoryId) {
            $category = Category::find($categoryId);
            $categoryName = ucfirst($category->name);

            $products = $category->allProducts();
        } else {
            $products = Product::get();
        }

        return view('product.index', compact('products', 'categoryName'));
    }

    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required|min:3',
        ]);

        $query = $request->input('query');

        //$products = Product::where('name', 'LIKE', "%$query%")->paginate(10);
        $products = Product::search($query)->paginate(10);

        return view('product.catalog', compact('products'));

    }

    public function product($id)
    {
        $productDetails = Product::where('id', $id)->first();
        $categories = Category::whereNull('parent_id')->first();

        //return view('product.detail')->with(compact('productDetails'));
        return view('product.detail', ['productDetails' => $productDetails, 'categories' => $categories]);

    }

    public function View_wishList()
    {
        $products = DB::table('wish_list')->leftJoin('products', 'wish_list.product_id', '=', 'products.id')->get();
        return view('wishlist', compact('products'));
    }
    public function addWishList(Request $request)
    {
        $wishlist = new Wishlist();

        $wishlist->user_id = Auth::user()->id;
        $wishlist->product_id = $request->product_id;
        $wishlist->save();

        $productDetails = Product::with('reviews')->find($request->product_id);

        return view('product.detail', compact('productDetails'));

    }

    public function destroyWishList($id)
    {
        DB::table('wish_list')->where('product_id', '=', $id)->delete();
        return back()->with('message', 'Items removed from wishlist');
    }

    public function allproducts(Request $request)
    {
        if ($request->ajax() && isset($request->start)) {
            $start = $request->start; // min price value
            $end = $request->end; // max price value

            $products = DB::table('products')
                ->where('price', '>=', $start)->where('price', '<=', $end)->orderby('price', 'ASC')->paginate(6);

            $categories = Category::whereNull('parent_id')->get();
            //dd($products);
            response()->json($products); //return to ajax
            response()->json($categories); //return to ajax
            return view('product.product', ['allProducts' => $products]);

        } else if (isset($request->brand)) {

            $brand = $request->brand; //brand

            $products = DB::table('products')->whereIN('brand', explode(',', $brand))->paginate(6);
            $categories = Category::whereNull('parent_id')->get();
            //dd($products);
            response()->json($products); //return to ajax
            response()->json($categories); //return to ajax
            return view('product.product', ['allProducts' => $products]);

        } else if ($request->ajax() && !isset($request->brand)) {

            /*$refreshAfter = 2;
            //Send a Refresh header to the browser.
            header('Refresh: ' . $refreshAfter);
            return view('product.all', ['allProducts' => $products]);*/
            echo "<h1>No Products Selected!</h1>";

        } else {

            $products = DB::table('products')->paginate(12);
            $categories = Category::whereNull('parent_id')->get();
            return view('product.all', ['allProducts' => $products, 'categories' => $categories]);
        }

    }

}
