<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 06.07.19
 * Time: 14:10
 */

namespace Imper86\AllegroRestApiSdk\Service\Factory;


use Imper86\AllegroRestApiSdk\Model\Auth\TokenBundleInterface;
use Psr\Http\Message\ResponseInterface;

interface TokenBundleFactoryInterface
{
    public function buildFromResponse(ResponseInterface $response): TokenBundleInterface;

    public function buildFromJwtString(string $accessToken, string $refreshToken): TokenBundleInterface;
}
