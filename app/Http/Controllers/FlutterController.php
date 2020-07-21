<?php

namespace App\Http\Controllers;

use App\Order;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Rave;

class FlutterController extends Controller
{
    public function view()
    {
        $orders = Order::where('user_id', Auth::user()->id)->latest()->first();
        $cartItems = \Cart::session(auth()->id())->getContent();

        return view('/cart/flutter', compact('orders', 'cartItems'));
    }

    public function initialize(Request $request)
    {
        switch ($request->method()) {
            case 'POST':
                Rave::initialize(route('callback'));
                break;

            case 'GET':
                return redirect()->route('home');
                break;
        }
    }

    public function callback(Request $request)
    {

        $obj = json_decode($request->resp, true);
        $txRef = $obj['data']['data']['txRef'];

        $data = Rave::verifyTransaction($txRef);

        $chargeResponsecode = $data->data->chargecode;
        $chargeAmount = $data->data->chargedamount;
        $chargeCurrency = $data->data->currency;

        $amount = $data->data->amount;
        $currency = "KES";
        if (($chargeResponsecode == "00" || $chargeResponsecode == "0") && ($chargeAmount == $amount) && ($chargeCurrency == $currency)) {

            $order = Order::where('user_id', Auth::user()->id)->latest()->first();
            $order->is_paid = 1;
            $order->save();
            \Cart::session(auth()->id())->clear();

            return redirect()->route('home')->withMessage('Payment Successful. Thank you for using our platform');
        } else {
            //Dont Give Value and return to Failure page
            return redirect('/failed');
        }
    }

}
