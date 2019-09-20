<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 20.09.2019
 * Time: 11:17
 */

namespace Imper86\AllegroRestApiSdk\Helper;


use Imper86\AllegroRestApiSdk\Constants\EndpointHost;
use Psr\Http\Message\UriInterface;

class SandboxUri
{
    public static function prep(UriInterface $uri): UriInterface
    {
        return $uri->withHost($uri->getHost() . EndpointHost::SANDBOX_SUFFIX);
    }
}
