<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 12:35
 */

namespace Imper69\AllegroApi\Rest\Model\ChangePrice;


use Imper69\AllegroApi\Rest\Model\Http\RequestInterface;
use Imper69\AllegroApi\Rest\Model\Http\ResponseInterface;
use Imper69\AllegroApi\Rest\Service\Exception\RestServiceException;
use Imper69\Curl\Model\ResponseInterface as CurlResponseInterface;

class ChangePriceResponse implements ResponseInterface
{
    /**
     * @var ChangePriceRequest
     */
    private $request;

    /**
     * @var CurlResponseInterface
     */
    private $curlResponse;


    public function __construct(ChangePriceRequest $request, CurlResponseInterface $curlResponse)
    {
        $this->request = $request;
        $this->curlResponse = $curlResponse;

        if (!empty($curlResponse->getRawResponse()->output->errors)) {
            throw new RestServiceException($this);
        }
    }

    public function getRequest(): RequestInterface
    {
        return $this->request;
    }

    public function getRaw()
    {
        return $this->curlResponse->getRawResponse();
    }

    public function getStatus(): string
    {
        return $this->getRaw()->output->status;
    }

}