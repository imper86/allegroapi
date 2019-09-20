<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 20.09.2019
 * Time: 12:02
 */

namespace Imper86\AllegroRestApiSdk\Helper;


use Imper86\AllegroRestApiSdk\Exception\InvalidHttpResponseException;
use Imper86\AllegroRestApiSdk\Model\Auth\TokenBundle;
use Imper86\AllegroRestApiSdk\Model\Auth\TokenBundleInterface;
use Lcobucci\JWT\Parser;
use Psr\Http\Message\ResponseInterface;

class TokenBundleFactory
{
    public static function buildFromResponse(ResponseInterface $response): TokenBundleInterface
    {
        $body = json_decode((string)$response->getBody(), true);

        if (!isset($body['access_token']) || !isset($body['refresh_token'])) {
            throw new InvalidHttpResponseException("Response got no access_token or refresh_token");
        }

        return self::buildFromJwtString($body['access_token'], $body['refresh_token']);
    }

    public static function buildFromJwtString(string $accessToken, string $refreshToken): TokenBundleInterface
    {
        $parser = new Parser();

        return new TokenBundle(
            $parser->parse($accessToken),
            $parser->parse($refreshToken)
        );
    }
}
