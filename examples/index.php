<?php

require_once 'vendor/autoload.php';

use httptools\Client;

$http = new Client();

$body = [
    "text" => "php get user ip"
];

$http->Url('https://chatgpt-api3.onrender.com/')->Method('POST')
    ->Headers([
        "Accept-Language: en-US,en;q=0.5",
        "Host: chatgpt-api3.onrender.com",
        "Content-type: application/json; charset=utf-8"
    ])->Body(json_encode($body));

try {
    $http->Send();
    echo $http->getBody();
} catch (\Exception $e) {
    echo 'Error: ' . $e->getMessage();
}