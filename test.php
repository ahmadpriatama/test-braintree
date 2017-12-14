<?php

require 'vendor/autoload.php';

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

Braintree_Configuration::environment(getenv('ENVIRONMENT'));
Braintree_Configuration::merchantId(getenv('MERCHANT_ID'));
Braintree_Configuration::publicKey(getenv('PUBLIC_KEY'));
Braintree_Configuration::privateKey(getenv('PRIVATE_KEY'));

$result = Braintree_Transaction::sale([
    'amount' => '10.00',
    'paymentMethodNonce' => getenv('PAYMENT_NONCE'),
    'options' => [
        'submitForSettlement' => True
    ]
]);

print_r($result);