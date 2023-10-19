# Client

Client is a PHP library that provides a simple and easy-to-use interface for making HTTP requests using cURL. It allows you to easily set HTTP headers, request body, request method, and other options.

## Installation

You can install Client using Composer:

```
composer require httptools/client
```

## Usage

To use Client, you first need to create an instance of the class:

```php
require_once 'vendor/autoload.php';

use httptools\Client;

$http = new Client();
```

### Setting Request Options

Client provides several methods for setting request options:

```php
$http->Url('https://example.com');
$http->Method('POST');
$http->Headers([
    'Content-Type: application/json',
    'Authorization: Bearer XXXXXXXXXXXXXXXXXXXXXXXXX'
]);
$http->Body('{"foo": "bar"}');
$http->Timeout(30);
echo $http->getBody();
```

### Sending the Request

To send the request, simply call the `Send()` method:

```php
$response = $http->Send();
```

The `Send()` method returns the response from the server as a string.

### Getting the HTTP Status Code

You can get the HTTP status code of the response using the `getStatus()` method:

```php
$status = $http->getStatus();
```

### Add 1 Option
Client add cURL options for the request. You can modify these defaults by calling the `Option()` method:
```php
$http->Option(CURLOPT_RETURNTRANSFER, true);
```

### Chaining Methods

Client allows you to chain methods to make the code more readable:

```php
$response = $http->Url('https://example.com')
    ->Method('POST')
    ->Headers([
        'Content-Type: application/json',
        'Authorization: Bearer XXXXXXXXXXXXXXXXXXXXXXXXX'
    ])
    ->Body('{"foo": "bar"}')
    ->Timeout(30)
    ->Send();
```

## Error Handling

Client throws an exception if cURL encounters an error while executing the request. You should always catch these exceptions to handle errors properly:

```php
try {
    $response = $http->Send();
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
```

## License

Client is licensed under the MIT License. See `LICENSE` for more information.

## Developer

Client is developed by Hossein Pira.

- Email: h3dev.pira@gmail.com
- Telegram: @h3dev

If you have any questions, comments, or feedback, please feel free to contact John via email or Telegram.
