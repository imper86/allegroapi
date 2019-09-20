# Allegro SOAP Api usage
Situation here is very similar to the Rest Api. Just use ready request objects
to get responses.

Wsdl mapping was made with
[wsdl2phpgenerator/wsdl2phpgenerator](https://github.com/wsdl2phpgenerator/wsdl2phpgenerator)

## TOC
1. [Request classes](#request-classes)
1. [Create AllegroClient object](#create-allegroclient-object)
1. [Send request / get response](#send-request--get-response)
1. [sessionId, sessionHandle, webapiKey in requests](#sessionid-sessionhandle-webapikey-in-requests)
1. [Exceptions](#exceptions)

## Request classes
All classes generated from wsdl are [here](../src/Model/SoapWsdl) but
you can find it hard to search there. Just use good IDE to get autocompletion.
If you know the name of the method you want to use, it's quite simple.

For example - start typing in PHPStorm new DoGet... and you will get
beautiful hints.

## Create AllegroClient object
Same as [HERE](rest_api_usage.md#create-allegroclient-object) 

## Send request / get response
Short and simple example to get user login:

```php
use Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetUserLoginRequest;

$req = new DoGetUserLoginRequest(1, 12345);
$response = $allegroClient->soapRequest($req, $sessionId);
```

## sessionId, sessionHandle, webapiKey in requests
Here you can be a little bit lazy - if your request requires webapiKey,
you can leave it with null, AllegroClient will check if setWebapiKey method
is in request object, and will set the value for you.

Also, if you put sessionId in the second argument of 
$allegroClient->soapRequest($req, $sessionId), lib will check for 
setSessionId and setSessionHandle methods and will handle it for you.

## Exceptions
Sending request may lead to a standard \SoapFault. Nothing special here.
