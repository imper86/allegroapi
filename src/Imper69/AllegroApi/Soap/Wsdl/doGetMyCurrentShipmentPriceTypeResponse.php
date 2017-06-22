<?php

namespace Imper69\AllegroApi\Soap\Wsdl;

class doGetMyCurrentShipmentPriceTypeResponse
{

    /**
     * @var int $shipmentPriceTypeId
     */
    protected $shipmentPriceTypeId = null;

    /**
     * @param int $shipmentPriceTypeId
     */
    public function __construct($shipmentPriceTypeId = null)
    {
      $this->shipmentPriceTypeId = $shipmentPriceTypeId;
    }

    /**
     * @return int
     */
    public function getShipmentPriceTypeId()
    {
      return $this->shipmentPriceTypeId;
    }

    /**
     * @param int $shipmentPriceTypeId
     * @return \Imper69\AllegroApi\Soap\Wsdl\doGetMyCurrentShipmentPriceTypeResponse
     */
    public function setShipmentPriceTypeId($shipmentPriceTypeId)
    {
      $this->shipmentPriceTypeId = $shipmentPriceTypeId;
      return $this;
    }

}
