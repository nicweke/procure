<?php

namespace App\Http\Controllers;

use App\Rating;
use Illuminate\Http\Request;

class RatesController extends Controller
{
    public function store(Request $request)
    {
        $data = new Rating;
        $data->rates = $request->rates;
        $data->save();
    }
}
