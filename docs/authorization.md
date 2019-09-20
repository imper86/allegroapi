#Allegro API Authorization

Authorizing with this lib is very easy. So far, lib is supporting only
authorization_code grant flow.

## TOC:
1. [Prepare credentials object](#prepare-credentials-object)
1. [Create AllegroAuth object](#create-allegroauth-object)
1. [Redirect to obtain authorization code](#redirect-to-obtain-authorization-code)
1. [Fetch access token to start using API](#fetch-access-token-to-start-using-api)
1. [Check if token is expired](#check-if-token-is-expired)
1. [Refresh expired token](#refresh-expired-token)
1. [Get access to WebAPI (soap)](#get-access-to-webapi-soap)

## Prepare credentials object
First, you should create object AppCredentials, or implement 
AppCredentialsInterface in your own class.

```php
use Imper86\AllegroRestApiSdk\Model\Credentials\AppCredentials;

$credentials = new AppCredentials(
    'clientId',
    'clientSecret',
    'http://your.redirect.uri',
    true //isSandbox
);
```

## Create AllegroAuth object
AllegroAuth is the only service to handle auth operations.

```php
use Imper86\AllegroRestApiSdk\AllegroAuth;

$authService = new AllegroAuth($credentials);
```

Optional arguments in AuthService constructor are:
* $logger (Psr\Log\LoggerInterface) - you can put your favourite log 
service there. If you leave this with null, lib won't log anything by itself
* $httpClient (Psr\Http\Client\ClientInterface) - you can put your
favourite HTTP Client there. If you leave this with null, lib will use
HTTPlug Guzzle6 Adapter

## Redirect to obtain authorization code
Use AllegroAuth to create proper URL and redirect.

```php
$url = $authService->createAuthUrl();
header('Location: ' . $url);
```

## Fetch access token to start using API
After successful authorization, user will be redirected back to your
app to your redirect uri with authorization code in query string.
Use it to obtain access token.

```php
$tokenBundle = $authService->fetchTokenFromCode($_GET['code']);
```

AllegroAuth will return object, which implements
[TokenBundleInterface](../src/Model/Auth/TokenBundleInterface.php).
It contains your new access and refresh tokens, and allows to easily
fetch some commonly used data, such as authorized user's id.

## Check if token is expired
If you keep your $tokenBundle object, you'll be able to check if your access
token is still active.

```php
$tokenBundle->getAccessExpirationTime(); //DateTime
$tokenBundle->getAccessToken()->isExpired(); //bool

$tokenBundle->getRefreshExpirationTime(); //DateTime
$tokenBundle->getRefreshToken()->isExpired(); //bool
```

## Refresh expired token
How to use refresh token to get new TokenBundle:

```php
if ($tokenBundle->getAccessToken()->isExpired()) {
    $tokenBundle = $allegroAuth->fetchTokenFromRefresh($tokenBundle->getRefreshToken());
}
```

## Get access to WebAPI (soap)
Once you have your access token you can also fetch WebAPI session id:

```php
$soapSession = $allegroAuth->fetchSoapSessionId($tokenBundle->getAccessToken())->getSessionHandlePart();
```
