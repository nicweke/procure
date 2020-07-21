<?php

namespace App\Http\Controllers;

use App\Mail\ShopActivationRequest;
use App\Shop;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class ShopController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'specialization' => 'required',
            'cover_img' => 'required|file|image|max:5000',
            'ownername' => 'required',
            'email' => 'required',
            'tel' => 'required|regex:/(01)[0-9]{9}/',
            'license' => 'required|mimes:pdf|max:5000',
            'cert' => 'required|mimes:pdf|max:5000',
            'account_name' => 'required',
            'account_number' => 'required',
            'bank_name' => 'required',
            'branch_name' => 'required',

        ]);

        //save to DB
        $shop = auth()->user()->shop()->create($request->all());

        if ($request->has('cover_img')) {
            $shop->update(['cover_img' => $request->file('cover_img')->store('uploads', 'public')]);
            $shop->update(['license' => $request->file('license')->store('uploads', 'public')]);
            $shop->update(['cert' => $request->file('cert')->store('uploads', 'public')]);
        }

        //send email to admin
        $admins = User::whereHas('role', function ($q) {
            $q->where('name', 'admin');
        })->get();

        Mail::to($admins)->send(new ShopActivationRequest($shop));

        return redirect()->route('home')->withMessage('Create Shop Request Sent');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        dd($shop->owner->name . ', Welcome To Your Shop', $shop->name);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $shop)
    {
        $this->storeImage($shop);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
        //
    }
    public function intro()
    {
        return view('shops.intro');
    }
    function new () {
        return view('shops.new');
    }
    public function profile()
    {
        $productDetails = DB::table('shops')
            ->leftJoin('products', 'shops.id', '=', 'products.shop_id')
            ->first();

        return view('product.detail', compact('productDetails'));
    }

}

//Product::find($shopDetails)->get();

//Product::where('user_id', Auth::user()->id)->with('product.purchases')
