<?php

namespace App\Http\Controllers;

use App\Banner;

class BannersController extends Controller
{
    public function addBanner()
    {
        $banners = Banner::get();
        return view('home', compact('banners'));
    }
}
