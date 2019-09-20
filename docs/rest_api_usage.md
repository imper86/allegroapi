# Allegro Rest API usage
It's strongly recommended to use good IDE (such as PHPStorm) with this lib.
Autocompletion and autoimport will make using this lib easy. Using simple
code editor can be painful.

## TOC
1. [General idea](#general-idea)
1. [Request classes](#request-classes)
1. [Create AllegroClient object](#create-allegroclient-object)
1. [Send request / get response](#send-request--get-response)
1. [Sending images](#sending-images)
1. [Exceptions](#exceptions)

## General idea
AllegroClient is very simple class, which only job is to prepare your
request, send it through Http Client and return Psr-7 response object.

If you want you can create your own requests implementing Psr-7 RequestInterface,
or use Guzzle's Request object. But main job of this package is to bring
you ready-to-use request classes.

## Request classes
You can find all request classes [HERE](../src/Model/Request)

Folders are named after allegro api documentation menu entries: 
https://developer.allegro.pl/documentation/ 

Classes are named after methods. Request method will always be the first
word, eg:
GetDeliveryMethodsRequestV1.php
PostShippingRateRequestV1.php

## Create AllegroClient object
To start using lib, you must create AllegroClient object.

```php
use Imper86\AllegroRestApiSdk\AllegroClient;

$allegroClient = new AllegroClient($credentials);
```

Optional arguments in constructor:
* $logger (Psr\Log\LoggerInterface) you can put your favourite log 
service there. If you leave this with null, lib won't log anything by itself
* $httpClient (Psr\Http\Client\ClientInterface) - you can put your
favourite HTTP Client there. If you leave this with null, lib will use
HTTPlug Guzzle6 Adapter

## Send request / get response
Let's say you want to get allegro public listing with category id 89012.
Here's how to do this:

```php
use Imper86\AllegroRestApiSdk\Model\Request\PublicOfferInformation\GetOffersListingRequestV1;

$request = new GetOffersListingRequestV1(
    $tokenBundle->getAccessToken(), 
    [
        'category.id' => '89012',
    ]
);
$response = $allegroClient->restRequest($request);
```

To get the response body in JSON format:

```php
$responseJson = (string)$response->getBody();
$responseDecoded = json_decode($responseJson);
```

## Sending images
Image uploads works just like any other request. Example:

```php
use Imper86\AllegroRestApiSdk\Model\ImagesAndAttachments\PostSaleImageRequestV1;

$request = new PostSaleImageRequestV1(
    $tokenBundle->getAccessToken(),
    $yourImageBody
);
$response = $allegroClient->restRequest($request);
```

## Exceptions
Following PSR-7, restRequest method won't throw exception, even if
http status code is >=400. Keep that in mind, that it's your job
to check $response->getStatusCode().

More about PSR-7: https://www.php-fig.org/psr/psr-7/
