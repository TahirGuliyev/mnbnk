<?php

function getXSignFromResponse(array $headers): string
{
    foreach ($headers as $headerName => $headerValue) {
        if (strtolower($headerName) === 'x-sign') {
            return $headerValue;
        }
    }

    throw new Exception('X-Sign header not found in response');
}

$pubKeyBase64 = "";

$headers = getallheaders();

$xSignBase64 = getXSignFromResponse($headers);

$message = file_get_contents('php://input');

$signature = base64_decode($xSignBase64);

$publicKey = openssl_get_publickey(base64_decode($pubKeyBase64));

$result = openssl_verify($message, $signature, $publicKey, OPENSSL_ALGO_SHA256);

echo $result === 1 ? "OK" : "NOT OK";

