<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class ShipmentTimeStruct
{

    /**
     * @var int $shipmentTimeFrom
     */
    protected $shipmentTimeFrom = null;

    /**
     * @var int $shipmentTimeTo
     */
    protected $shipmentTimeTo = null;

    /**
     * @param int $shipmentTimeFrom
     * @param int $shipmentTimeTo
     */
    public function __construct($shipmentTimeFrom = null, $shipmentTimeTo = null)
    {
      $this->shipmentTimeFrom = $shipmentTimeFrom;
      $this->shipmentTimeTo = $shipmentTimeTo;
    }

    /**
     * @return int
     */
    public function getShipmentTimeFrom()
    {
      return $this->shipmentTimeFrom;
    }

    /**
     * @param int $shipmentTimeFrom
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\ShipmentTimeStruct
     */
    public function setShipmentTimeFrom($shipmentTimeFrom)
    {
      $this->shipmentTimeFrom = $shipmentTimeFrom;
      return $this;
    }

    /**
     * @return int
     */
    public function getShipmentTimeTo()
    {
      return $this->shipmentTimeTo;
    }

    /**
     * @param int $shipmentTimeTo
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\ShipmentTimeStruct
     */
    public function setShipmentTimeTo($shipmentTimeTo)
    {
      $this->shipmentTimeTo = $shipmentTimeTo;
      return $this;
    }

}
