<?php

namespace App\Http\Controllers;

use App\Payment;
use App\Set;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Osen\Mpesa\C2B;
use Osen\Mpesa\STK;

class MpesaController extends Controller
{
    /**
     * Create a new MpesaController instance. We also configure the M-PESA APIs here so they are available for the controller methods.
     *
     * @return void
     */
    public function __construct()
    {
        STK::init(
            array(
                'env' => Set::mpesa('env', 'sandbox'),
                'type' => Set::mpesa('type', 4),
                'shortcode' => Set::mpesa('shortcode', '174379'),
                'key' => Set::mpesa('key', 'JtCsKNEyVmyHmVmfshtP1ki77hdGTKhk'),
                'secret' => Set::mpesa('secret', 'GzONqxAJcX3uSlO6'),
                'passkey' => Set::mpesa('passkey', 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919'),
                'validation_url' => url('mpesa/validate'),
                'confirmation_url' => url('mpesa/confirm'),
                'callback_url' => url('mpesa/reconcile'),
                'results_url' => url('mpesa/results'),
                'timeout_url' => url('mpesa/timeout'),
            )
        );

        C2B::init(
            array(
                'env' => Set::mpesa('env', 'sandbox'),
                'type' => Set::mpesa('type', 4),
                'shortcode' => Set::mpesa('shortcode', '174379'),
                'key' => Set::mpesa('key', 'JtCsKNEyVmyHmVmfshtP1ki77hdGTKhk'),
                'secret' => Set::mpesa('secret', 'GzONqxAJcX3uSlO6'),
                'username' => Set::mpesa('username', 'nicwek'),
                'passkey' => Set::mpesa('passkey', 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919'),
                'validation_url' => url('mpesa/validate'),
                'confirmation_url' => url('mpesa/confirm'),
                'callback_url' => url('mpesa/reconcile'),
                'timeout_url' => url('mpesa/timeout'),
                'response_url' => url('mpesa/response'),
            )
        );
    }

    /**
     * Send a request to payment gateway for processing
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Support\Facades\Redirect;
     */
    public function pay(Request $request)
    {
        $data = $request->all();

        try {
            $response = STK::send($request->input('phone'), $request->input('amount'), $request->input('account'));

            if (!$response) {
                toast(ucwords(__('could not connect to daraja')), 'error');
                return Redirect::back();
            } elseif (isset($response['errorCode'])) {
                toast(ucwords(__("{$response['errorCode']}: {$response['errorMessage']}")), 'error');
                return Redirect::back();
            } else {
                $data['request'] = $response['MerchantRequestID'];
                $data['status'] = 0;

                $payment = Payment::create($data);

                if ($payment) {
                    toast(ucwords(__('check your phone to complete payment')), 'success');
                } else {
                    toast(ucwords(__('failed to create record')), 'error');
                }

                return Redirect::back();
            }
        } catch (\Exception $e) {
            toast(ucwords(__($e->getMessage())), 'error');
            return Redirect::back();
        }
    }

    public function reconcile(Request $request)
    {
        return STK::reconcile(
            function ($response) {
                $resultCode = $response['stkCallback']['ResultCode'];
                $resultDesc = $response['stkCallback']['ResultDesc'];
                $merchantRequestID = $response['stkCallback']['MerchantRequestID'];

                $payment = Payment::whereRequest($merchantRequestID)->first();

                if (isset($response['stkCallback']['CallbackMetadata'])) {
                    $CallbackMetadata = $response['stkCallback']['CallbackMetadata']['Item'];

                    $amount = $CallbackMetadata[0]['Value'];
                    $mpesaReceiptNumber = $CallbackMetadata[1]['Value'];
                    $balance = $CallbackMetadata[2]['Value'];
                    $transactionDate = $CallbackMetadata[3]['Value'];
                    $phone = $CallbackMetadata[4]['Value'];

                    $payment->status = 1;
                    $payment->amount = $amount;
                    $payment->receipt = $mpesaReceiptNumber;

                    return true;
                } else {
                    $payment->status = 'Pending';
                }

                if ($payment->save()) {
                    toast(ucwords(__('failed to send sms')), 'error');

                    return true;
                }

                return true;
            }
        );
    }

    public function register(Request $request)
    {
        return C2B::register();
    }

    public function validation(Request $request)
    {
        return C2B::validate(
            function ($response) {
                return true;
            }
        );
    }

    public function status(Request $request)
    {
        return C2B::status(
            function ($response) {
                return true;
            }
        );
    }

    public function balance(Request $request)
    {
        return C2B::balance(
            function ($response) {
                return true;
            }
        );
    }

    public function confirmation(Request $request)
    {
        return C2B::confirm(
            function ($response) {
                $TransactionType = $response['TransactionType'];
                $TransID = $response['TransID'];
                $TransTime = $response['TransTime'];
                $TransAmount = $response['TransAmount'];
                $BusinessShortCode = $response['BusinessShortCode'];
                $BillrequestNumber = $response['BillrequestNumber'];
                $InvoiceNumber = $response['InvoiceNumber'];
                $OrgAccountBalance = $response['OrgAccountBalance'];
                $ThirdPartyTransID = $response['ThirdPartyTransID'];
                $MSISDN = $response['MSISDN'];
                $FirstName = $response['FirstName'];
                $MiddleName = $response['MiddleName'];
                $LastName = $response['LastName'];

                $customer = "{$FirstName} {$MiddleName} {$LastName}";

                $payment = Payment::whereRequest($BillrequestNumber)->first();
                //->whereBetween('created_at', '<', Carbon::now()->subMinute()->toDateTimeString())

                $payment->receipt = $TransID;

                return $payment->save() ? true : false;
            }
        );
    }

    public function results(Request $request)
    {
        return STK::results(
            function ($response) {
                return true;
            }
        );
    }

    public function timeout(Request $request)
    {
        return STK::timeout(
            function ($response) {
                return true;
            }
        );
    }
}
