<?php

require_once 'vendor/autoload.php';

use httptools\Client;

$http = new Client();

$response = $http
    ->Url('https://nahanabzar.ir/ai')
    ->Method('GET')
    ->Headers([
        'Content-Type: application/json'
    ])
    ->Body('{"text": "Hello Bot"}')
    ->Send();

echo $response;

$statusCode = $http->getStatus();
echo "<br /> Status Code: $statusCode\n";