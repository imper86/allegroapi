<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 06.07.19
 * Time: 14:12
 */

namespace Imper86\AllegroRestApiSdk\Service\Factory;

use Imper86\AllegroRestApiSdk\Exception\InvalidHttpResponseException;
use Imper86\AllegroRestApiSdk\Model\Auth\TokenBundle;
use Imper86\AllegroRestApiSdk\Model\Auth\TokenBundleInterface;
use Lcobucci\JWT\Parser;
use Psr\Http\Message\ResponseInterface;

class TokenBundleFactory implements TokenBundleFactoryInterface
{
    /**
     * @var Parser
     */
    private $parser;

    public function __construct(Parser $parser)
    {
        $this->parser = $parser;
    }

    public function buildFromResponse(ResponseInterface $response): TokenBundleInterface
    {
        $body = json_decode((string)$response->getBody(), true);

        if (!isset($body['access_token']) || !isset($body['refresh_token'])) {
            throw new InvalidHttpResponseException("Response got no access_token or refresh_token");
        }

        return $this->buildFromJwtString($body['access_token'], $body['refresh_token']);
    }

    public function buildFromJwtString(string $accessToken, string $refreshToken): TokenBundleInterface
    {
        return new TokenBundle(
            $this->parser->parse($accessToken),
            $this->parser->parse($refreshToken)
        );
    }

}
