<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 15:43
 */

namespace Imper86\AllegroApi\Rest\Model\AfterSalesServiceConditions;


use Imper86\AllegroApi\Rest\Model\Http\RequestInterface;
use Imper86\AllegroApi\Rest\Model\Http\ResponseInterface;
use Imper86\Curl\Model\ResponseInterface as CurlResponseInterface;

abstract class AbstractAfterSalesServiceConditionsResponse implements ResponseInterface, AfterSalesServiceConditionsResponseInterface
{
    /**
     * @var AbstractAfterSalesServiceConditonsRequest
     */
    private $request;

    /**
     * @var CurlResponseInterface
     */
    private $curlResponse;

    /**
     * @var AfterSalesServiceConditionCollection
     */
    private $conditions;


    abstract public function getConditionsArray(): array;

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

    public function getCount(): int
    {
        return (int)$this->getRaw()->count;
    }

    public function getConditions(): AfterSalesServiceConditionCollection
    {
        if (null === $this->conditions) {
            $this->conditions = new AfterSalesServiceConditionCollection($this);
        }

        return $this->conditions;
    }
}