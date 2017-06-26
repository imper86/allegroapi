<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 13:25
 */

namespace Imper86\AllegroApi\Rest\Service\HttpClient;


use Imper86\AllegroApi\Rest\Model\Http\RequestInterface;
use Imper86\Curl\Model\ResponseInterface as CurlResponseInterface;

interface HttpClientServiceInterface
{
    public function sendRequest(RequestInterface $request): CurlResponseInterface;
}