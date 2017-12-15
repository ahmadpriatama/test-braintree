<?php

require "init.php";

$amount = isset($_GET['amount']) && $_GET['amount'] ?: 10;
$settlement = isset($_GET['settle']) && $_GET['settle'] ? boolval($_GET['settlement']) : true;

$result = Braintree_Transaction::sale([
    'amount' => strval($amount),
    'paymentMethodNonce' => $_POST['payment_method_nonce'],
    'options' => [
        'submitForSettlement' => $settlement
    ],
]);

echo '<pre>';
print_r($result);
