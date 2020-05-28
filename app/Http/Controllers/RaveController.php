<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Rave;

class RaveController extends Controller
{

    /**
     * Initialize Rave payment process
     * @return void
     */
    public function initialize()
    {
        //This initializes payment and redirects to the payment gateway
        //The initialize method takes the parameter of the redirect URL
        Rave::initialize(route('callback'));
    }

    public function callback()
    {

        $data = Rave::verifyTransaction(request()->txref);

    }

    public function webhook()
    {
        //This receives the webhook
        $data = Rave::receiveWebhook();
        Log::info(json_encode($data, true));
    }

    public function verify()
    {

        $price = DB::table('orders')->latest('grand_total')->first();
        $txref = "rave_12345";

        $data = Rave::verifyTransaction($txref);

        $chargeResponsecode = $data->data->chargecode;
        $chargeAmount = $data->data->amount;
        $chargeCurrency = $data->data->currency;

        $amount = $price;
        $currency = "KES";
        if (($chargeResponsecode == "00" || $chargeResponsecode == "0") && ($chargeAmount == $amount) && ($chargeCurrency == $currency)) {
            // transaction was successful...
            // please check other things like whether you already gave value for this ref
            // if the email matches the customer who owns the product etc
            //Give Value and return to Success page

            return redirect()->route('home')->withMessage('Purchase Completed Successfully');

        } else {
            //Dont Give Value and return to Failure page

            return redirect('/failed');
        }
    }

}
