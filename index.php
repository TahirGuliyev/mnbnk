<?php
require_once 'Payment.php';
use MonoPayProject\Payment;

$url = 'https://api.monobank.ua/api/merchant/invoice/create';
$token = '';


$payment = new Payment($url, $token);
$body = array(
    "amount" => 550,
    "ccy" => 980,
    "merchantPaymInfo" => array(
        "reference" => "orxan",
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
    "saveCardData" => array(
        "saveCard" => true,
        "walletId" => "69f780d841a0434aa535b08821f4822c"
    )
);

$payment->create($body);
