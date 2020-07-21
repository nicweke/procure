<?php

namespace App\Http\Controllers;

use App\Mail\TrackOrderRequest;
use App\TrackOrder;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TrackController extends Controller
{
    public function index()
    {
        return view('track_order');
    }

    public function store(Request $request)
    {
        /*$request->validate([
        'order_id' => 'required',
        'billing_email' => 'required',

        ]);*/

        $track = auth()->user()->trackorder()->create($request->all());

        //send email to admin
        $admins = User::whereHas('role', function ($q) {
            $q->where('name', 'admin');
        })->get();

        Mail::to($admins)->send(new TrackOrderRequest($track));

        return redirect()->route('home')->withMessage('You will receive information on your order shortly');

    }

}
