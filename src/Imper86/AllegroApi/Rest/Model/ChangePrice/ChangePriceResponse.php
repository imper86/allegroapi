<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 12:35
 */

namespace Imper86\AllegroApi\Rest\Model\ChangePrice;


use Imper86\AllegroApi\Rest\Model\Http\AbstractResponseFromCurl;
use Imper86\AllegroApi\Rest\Model\Http\RequestInterface;
use Imper86\AllegroApi\Rest\Model\Http\ResponseInterface;
use Imper86\AllegroApi\Rest\Service\Exception\RestServiceException;
use Imper86\Curl\Model\ResponseInterface as CurlResponseInterface;

class ChangePriceResponse extends AbstractResponseFromCurl implements ResponseInterface
{
    public function __construct(ChangePriceRequest $request, CurlResponseInterface $curlResponse)
    {
        parent::__construct($request, $curlResponse);

        if (!empty($curlResponse->getRawResponse()->output->errors)) {
            throw new RestServiceException($this);
        }
    }

    public function getStatus(): string
    {
        return $this->getRaw()->output->status;
    }

}