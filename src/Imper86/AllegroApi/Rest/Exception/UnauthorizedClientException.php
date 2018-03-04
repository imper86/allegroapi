<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 04.03.2018
 * Time: 17:02
 */

namespace Imper86\AllegroApi\Rest\Exception;


use GuzzleHttp\Exception\ClientException;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class UnauthorizedClientException extends ClientException
{
    public function __construct(ClientException $clientException)
    {
        parent::__construct(
            $clientException->getMessage(),
            $clientException->getRequest(),
            $clientException->getResponse(),
            $clientException->getPrevious(),
            $clientException->getHandlerContext()
        );
    }
}