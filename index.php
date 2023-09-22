<?php
require_once 'Payment.php';
use MonoPayProject\Payment;

$url = 'https://api.monobank.ua/api/merchant/invoice/create';
$token = 'LS0tLS1CRUdJTiBQVUJMSUMgS0VZLS0tLS0KTUZrd0V3WUhLb1pJemowQ0FRWUlLb1pJemowREFRY0RRZ0FFQUc1LzZ3NnZubGJZb0ZmRHlYWE4vS29CbVVjTgo3NWJSUWg4MFBhaEdldnJoanFCQnI3OXNSS0JSbnpHODFUZVQ5OEFOakU1c0R3RmZ5Znhub0ZJcmZBPT0KLS0tLS1FTkQgUFVCTElDIEtFWS0tLS0tCg';


$payment = new Payment($url, $token);
$body = [
    "orderId" => '12345',
    "data" => [
        "name" => 'order1',
        "amount" => '1',
        "redirectUrl" => 'index.php',
        "webHookUrl" => 'webhook.php'
    ],
    "orderId" => '12346',
    "data" => [
        "name" => 'order2',
        "amount" => '1',
        "redirectUrl" => 'index.php',
        "webHookUrl" => 'webhook.php'
    ],
    "orderId" => '12347',
    "data" => [
        "name" => 'order3',
        "amount" => '1',
        "redirectUrl" => 'index.php',
        "webHookUrl" => 'webhook.php'
    ]
];

$payment->post($body);
