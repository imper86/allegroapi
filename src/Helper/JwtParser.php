<?php

namespace Imper86\AllegroRestApiSdk\Helper;

use Lcobucci\JWT\Configuration;
use Lcobucci\JWT\Parser;

class JwtParser
{
    private static $configuration = null;

    public static function get(): Parser
    {
        if (null === self::$configuration) {
            self::$configuration = Configuration::forUnsecuredSigner();
        }

        return self::$configuration->parser();
    }
}
