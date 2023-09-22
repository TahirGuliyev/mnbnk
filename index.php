<?php
require_once 'Payment.php';
use MonoPayProject\Payment;

$url = 'https://api.monobank.ua/api/merchant/invoice/create';
$token = '';


$payment = new Payment($url, $token);
$body = array(
    "amount" => 1,
    "ccy" => 980,
    "merchantPaymInfo" => array(
        "reference" => "84d0070ee4e44667b31371d8f8813947",
        "destination" => "Покупка щастя",
        "comment" => "Покупка щастя",
        "basketOrder" => array(
            array(
                "name" => "Табуретка",
                "qty" => 1,
                "sum" => 1,
                "icon" => "string",
                "unit" => "шт.",
                "code" => "d21da1c47f3c45fca10a10c32518bdeb",
                "barcode" => "string",
                "header" => "string",
                "footer" => "string",
                "tax" => array(),
                "uktzed" => "string"
            )
        )
    ),
    "redirectUrl" => "https://example.com/your/website/result/page",
    "webHookUrl" => "https://example.com/mono/acquiring/webhook/maybesomegibberishuniquestringbutnotnecessarily",
    "validity" => 3600,
    "paymentType" => "debit",
    "code" => "0a8637b3bccb42aa93fdeb791b8b58e9",
    "saveCardData" => array(
        "saveCard" => true,
        "walletId" => "69f780d841a0434aa535b08821f4822c"
    )
);

$payment->create($body);
