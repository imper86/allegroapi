<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 15:43
 */

namespace Imper69\AllegroApi\Rest\Model\AfterSalesServiceConditions;


use Imper69\AllegroApi\Rest\Model\Http\RequestInterface;
use Imper69\AllegroApi\Rest\Model\Http\ResponseInterface;
use Imper69\Curl\Model\ResponseInterface as CurlResponseInterface;

abstract class AbstractAfterSalesServiceConditionsResponse implements ResponseInterface
{
    /**
     * @var AbstractAfterSalesServiceConditonsRequest
     */
    private $request;

    /**
     * @var CurlResponseInterface
     */
    private $curlResponse;


    public function __construct(AbstractAfterSalesServiceConditonsRequest $request, CurlResponseInterface $curlResponse)
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