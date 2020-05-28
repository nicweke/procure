<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BannersController extends Controller
{
    public function addBanner(Request $request)
    {
        return ('admin.banners.add_banner');
    }
}
