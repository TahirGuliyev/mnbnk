<?php

namespace MonoPayProject;

class Payment {
    private string $url = '';
    private string $token = '';
    private array $headers;


    public function __construct(string $url, string $token){
        $this->token = $token;
        $this->url = $url;
        $this->headers = ["X-Token: $token"];
    }
    function post($body) {
        $curl = curl_init($this->url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $this->headers);
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($body));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);
        return json_decode($response);
    }

}