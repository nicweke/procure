<?php
namespace App;

class EncryptParameters
{
    /**
     * Merchant's IV key
     */
    private $iv;
    /**
     * Merchant's secret key
     */
    private $key;
    /**
     * EncryptParameters constructor.
     */
    public function __construct()
    {
        $this->iv = 'QnP4mk3WDy8VFzKw';
        $this->key = 'KmQkqYrZ389D2zRJ';
//       $this->request = !empty($_POST)? $_POST:json_decode(file_get_contents('php://input'), true);
    }
    /**
     * Encrypt the string of customer details with the IV and secret key.
     *
     * @param $payload Pass in the array of parameters to be pass to express checkout.
     * @return string
     */
    public function encryptData($payload = [])
    {
        //The encryption method to be used
        $encrypt_method = "AES-256-CBC";
        // Hash the secret key
        $key = hash('sha256', $this->key);
        // Hash the iv - encrypt method AES-256-CBC expects 16 bytes
        $iv = substr(hash('sha256', $this->iv), 0, 16);
        $encrypted = openssl_encrypt(
            json_encode($payload, true),
            $encrypt_method,
            $key,
            0,
            $iv
        );
        //Base 64 Encode the encrypted payload
        $encrypted = base64_encode($encrypted);

        $result = array(
            'params' => $encrypted,
            'accessKey' => $payload['accessKey'],
            'countryCode' => $payload['countryCode'],
        );

        echo json_encode($result);
    }
}

$class = new EncryptParameters;
$request = !empty($_POST) ? $_POST : json_decode(file_get_contents('php://input'), true);

$class->encryptData($request);
