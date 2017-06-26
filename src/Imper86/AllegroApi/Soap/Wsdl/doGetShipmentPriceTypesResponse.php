<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class doGetShipmentPriceTypesResponse
{

    /**
     * @var ArrayOfShipmentpricetypestruct $shipmentPriceTypes
     */
    protected $shipmentPriceTypes = null;

    /**
     * @param ArrayOfShipmentpricetypestruct $shipmentPriceTypes
     */
    public function __construct($shipmentPriceTypes = null)
    {
      $this->shipmentPriceTypes = $shipmentPriceTypes;
    }

    /**
     * @return ArrayOfShipmentpricetypestruct
     */
    public function getShipmentPriceTypes()
    {
      return $this->shipmentPriceTypes;
    }

    /**
     * @param ArrayOfShipmentpricetypestruct $shipmentPriceTypes
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetShipmentPriceTypesResponse
     */
    public function setShipmentPriceTypes($shipmentPriceTypes)
    {
      $this->shipmentPriceTypes = $shipmentPriceTypes;
      return $this;
    }

}
