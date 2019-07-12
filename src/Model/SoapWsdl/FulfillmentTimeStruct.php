<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class FulfillmentTimeStruct
{

    /**
     * @var int $fulfillmentTimeFrom
     */
    protected $fulfillmentTimeFrom = null;

    /**
     * @var int $fulfillmentTimeTo
     */
    protected $fulfillmentTimeTo = null;

    /**
     * @param int $fulfillmentTimeFrom
     * @param int $fulfillmentTimeTo
     */
    public function __construct($fulfillmentTimeFrom = null, $fulfillmentTimeTo = null)
    {
      $this->fulfillmentTimeFrom = $fulfillmentTimeFrom;
      $this->fulfillmentTimeTo = $fulfillmentTimeTo;
    }

    /**
     * @return int
     */
    public function getFulfillmentTimeFrom()
    {
      return $this->fulfillmentTimeFrom;
    }

    /**
     * @param int $fulfillmentTimeFrom
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\FulfillmentTimeStruct
     */
    public function setFulfillmentTimeFrom($fulfillmentTimeFrom)
    {
      $this->fulfillmentTimeFrom = $fulfillmentTimeFrom;
      return $this;
    }

    /**
     * @return int
     */
    public function getFulfillmentTimeTo()
    {
      return $this->fulfillmentTimeTo;
    }

    /**
     * @param int $fulfillmentTimeTo
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\FulfillmentTimeStruct
     */
    public function setFulfillmentTimeTo($fulfillmentTimeTo)
    {
      $this->fulfillmentTimeTo = $fulfillmentTimeTo;
      return $this;
    }

}
