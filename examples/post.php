<?php

require_once 'vendor/autoload.php';

use httptools\Client;

$http = new Client();

$response = $http
    ->Url('https://example.com')
    ->Method('POST')
    ->Headers([
        'Content-Type: application/x-www-form-urlencoded'
    ])
    ->Timeout(30)
    ->Body('email=user@gmail.com&password=123456');

try {
    $response = $http->Send();
    echo $response;
} catch (\Exception $e) {
    echo 'Error: ' . $e->getMessage();
}