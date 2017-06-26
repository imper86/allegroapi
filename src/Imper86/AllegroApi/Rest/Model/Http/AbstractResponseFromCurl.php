<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 23.06.17
 * Time: 12:38
 */

namespace Imper86\AllegroApi\Rest\Model\Http;

use Imper86\Curl\Model\ResponseInterface as CurlResponseInterface;


abstract class AbstractResponseFromCurl implements ResponseInterface
{
    /**
     * @var RequestInterface
     */
    private $request;

    /**
     * @var CurlResponseInterface
     */
    private $curlResponse;


    public function __construct(RequestInterface $request, CurlResponseInterface $curlResponse)
    {
        $this->request = $request;
        $this->curlResponse = $curlResponse;
    }


    public function getRequest(): RequestInterface
    {
        return $this->request;
    }

    public function getRaw()
    {
        return $this->curlResponse->getRawResponse();
    }

}