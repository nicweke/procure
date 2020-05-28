<?php

namespace App\Http\Controllers;

use App\Mail\QuotationRequest;
use App\Product;
use App\Quote;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class QuoteResponseController extends Controller
{
    public function verify(Request $request, $id)
    {
        //return $request->all();

        /* $request->validate([
        'quantity' => 'required',
        'email' => 'required',
        'company' => 'required',
        ]);*/

        //Save Quote to db
        $product = Product::where('id', $id)->first();

        $quote = new Quote;
        $quote->name = $request->input('name');
        $quote->quantity = $request->input('quantity');
        $quote->company = $request->input('company');
        $quote->email = $request->input('email');
        $quote->inquiry = $request->input('inquiry');

        $quote->save();

        //send email to aadmin
        $admins = User::whereHas('role', function ($q) {
            $q->where('name', 'admin');
        })->get();

        Mail::to($admins)->send(new QuotationRequest($quote));

        return redirect()->route('home')->withMessage('Quotation request has been received, kindly wait as we process it');

    }

}
