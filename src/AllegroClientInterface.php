<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 20.09.2019
 * Time: 10:38
 */

namespace Imper86\AllegroRestApiSdk;


use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * Interface AllegroClientInterface
 * @package Imper86\AllegroRestApiSdk
 */
interface AllegroClientInterface
{
    /**
     * @param RequestInterface $request
     * @param array $logContext
     * @return ResponseInterface
     */
    public function restRequest(RequestInterface $request, array $logContext = []): ResponseInterface;

    /**
     * @param $requestObject
     * @param string|null $sessionId
     * @param array $logContext
     * @return mixed
     */
    public function soapRequest($requestObject, ?string $sessionId = null, array $logContext = []);
}
