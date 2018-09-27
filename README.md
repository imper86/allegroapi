# allegroapi PHP SDK
Library that makes allegro rest and soap api using easier

## Installation
This lib should be installed with composer
```php
composer require imper86/allegroapi
```

## Requirements
* PHP >= 7.1 (please forgive me, i think it's time to say goodbye to PHP5)

## REST Api usage
Usage of allegro rest api is very simple with this library.

### Prepare credentials
First, you should create object Credentials, or implement CredentialsInterface in your own class.
```php
$credentials = new Credentials([
    'restClientId' => 'yourClientId',
    'restClientSecret' => 'yourClientSecret',
    'restApiKey' => 'yourApiKey',
    'restRedirectUri' => 'yourRedirectUri',
    'soapApiKey' => 'yourSoapApiKey',
]);
```

### Get your token
Every operation in REST Api needs OAuth token. You can easily get it with this library.
```php
$client = new RestClient($credentials);
$authService = $client->getAuthService();

//now redirect to URL generated from this method:
header('Location: '.$authService->getAuthUrl());
```

After logging in Allegro.pl you will be redirected to your RedirectUrl with auth code in query string.
What next?

```php
$code = $_GET['code'];

$token = $authService->getNewToken($code);
```

You can store Token serializing it, or storing it's values. You can also implement TokenInterface to create a solution that suits your needs.

If your token has expired, just generate new one with this method:

```php
$newToken = $authService->refreshToken($token);
```

### Usage of API methods
The best explanation how to use it will be some example, so here it is:

```php
$request = new Request('GET', 'pricing/offer-quotes', null, ['offer.id' => '123123123']);
$response = $client->sendRequest($token, $request);

var_dump(json_decode((string) $response->getBody()));
```

With that simple way you can use all api methods. Alternative method is use prepared request classes.

Ready-to-use request classes location: [here](src/Imper86/AllegroApi/Rest/Model/Request)
I already covered almost all rest api methods. I'll try to create all to cover 100%.

Of course you can create your own, just implement RequestInterface. It's very simple.

Example:
```php
$request = new PutChangePriceCommandRequest('123123123', '123.45');
$response = $client->sendRequest($token, $request);

var_dump(json_decode((string) $response->getBody()));
```

## Exceptions
I've created two Exception classes:
InvalidRequestMethodException - just means that you used wrong HTTP method name in your request.
UnauthorizedClientException - you should catch it just to know when refreshing token is necessary.

## A full, working example
If you don't understand my approach, or even the whole library, please look at this gist. Maybe
that way will be easier for you to start working with my solution: [link](https://gist.github.com/imper86/c3dffb37e33621e673829c5412720502)

## SOAP API
There is a class AllegroApiSoapClient inside this lib, and you can use it, by so far I got no time to finish it.
It should work ok, but I need some time to document it.

## Sandbox
Allegro Api Sandbox is problematic. It almost never works properly, so if you want to test your app, just use production API. Trust me, there is no good reason to implement Sandbox endpoints :)

## Few ending words
If you have any suggestions, or noticed any issues, feel free to report it, or contact me.
