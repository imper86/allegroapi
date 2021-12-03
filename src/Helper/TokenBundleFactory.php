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
    public static function buildFromResponse(
        ResponseInterface $response,
        ?string $grantType = null
    ): TokenBundleInterface
    {
        $body = json_decode((string)$response->getBody(), true);

        if (!isset($body['access_token'])) {
            throw new InvalidHttpResponseException("Response got no access_token");
        }

        return self::buildFromJwtString(
            $body['access_token'],
            $body['refresh_token'] ?? null,
            $grantType,
            empty($body['scope']) ? null : explode(' ', $body['scope'])
        );
    }

    public static function buildFromJwtString(
        string $accessToken,
        ?string $refreshToken = null,
        ?string $grantType = null,
        ?array $scope = null
    ): TokenBundleInterface
    {
        $parser = JwtParser::get();

        return new TokenBundle(
            $parser->parse($accessToken),
            $refreshToken ? $parser->parse($refreshToken) : null,
            $grantType,
            $scope
        );
    }
}
