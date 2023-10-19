<?php

require_once 'vendor/autoload.php';

use httptools\Client;

$http = new Client();

$body = [
    "id" => 1,
    "title" => "what is php?"
];

$response = $http
    ->Url('https://example.com/post')
    ->Method('POST')
    ->MaxRedirects(20)
    ->Body($body);

try {
    $response = $http->Send();
    echo $response;
} catch (\Exception $e) {
    echo 'Error: ' . $e->getMessage();
}