<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 20.09.2019
 * Time: 11:33
 */

namespace Imper86\AllegroRestApiSdk\Helper;


use Lcobucci\JWT\Parser;
use Lcobucci\JWT\Token;
use Psr\Http\Message\RequestInterface;
use Throwable;

class RequestTokenFetcher
{
    public static function fetch(RequestInterface $request): ?Token
    {
        if ($header = $request->getHeaderLine('Authorization')) {
            if ($stringToken = (explode(' ', $header)[1] ?? null)) {
                try {
                    $token = (new Parser())->parse($stringToken);

                    return $token;
                } catch (Throwable $exception) {}
            }
        }

        return null;
    }
}
