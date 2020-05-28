<?php

namespace App\Http\Controllers;

use App\Checkout;

class PaymentController extends Controller
{
    private $secret;
    private $IV;

    public function __construct($secret, $IV)
    {
        $this->secret = $secret;
        $this->IV = $IV;
    }

    public function encrypt($requestBody)
    {
        $secret = hash('sha256', $this->secret);
        $IV = substr(hash('sha256', $this->IV), 0, 16);

        $payload = json_encode($requestBody);
        $result = openssl_encrypt(
            $payload,
            'AES-256-CBC',
            $secret,
            0,
            $IV
        );

        return base64_encode($result);

        // Get the body of the post request made
        // after the customer clicked the checkout button
        $checkoutRequestBody = file_get_contents('php://input');

        // The Request body is read into a string,
        // so we decode the JSON string into a PHP associative array
        $checkoutPayload = json_decode($checkoutRequestBody);

        $checkout = new Checkout(
            '2BfjH469WxmcJdPM',
            'QpJXdbYv6tHLhCTK'
        );

        $params = $checkout->encrypt($checkoutPayload);

        header('Content-Type: application/json');
        echo json_encode(array("params" => $params));

    }

}
