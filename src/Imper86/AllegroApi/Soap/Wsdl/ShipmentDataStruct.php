<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class ShipmentDataStruct
{

    /**
     * @var int $shipmentId
     */
    protected $shipmentId = null;

    /**
     * @var string $shipmentName
     */
    protected $shipmentName = null;

    /**
     * @var int $shipmentType
     */
    protected $shipmentType = null;

    /**
     * @var ShipmentTimeStruct $shipmentTime
     */
    protected $shipmentTime = null;

    /**
     * @param int $shipmentId
     * @param string $shipmentName
     * @param int $shipmentType
     * @param ShipmentTimeStruct $shipmentTime
     */
    public function __construct($shipmentId = null, $shipmentName = null, $shipmentType = null, $shipmentTime = null)
    {
      $this->shipmentId = $shipmentId;
      $this->shipmentName = $shipmentName;
      $this->shipmentType = $shipmentType;
      $this->shipmentTime = $shipmentTime;
    }

    /**
     * @return int
     */
    public function getShipmentId()
    {
      return $this->shipmentId;
    }

    /**
     * @param int $shipmentId
     * @return \Imper86\AllegroApi\Soap\Wsdl\ShipmentDataStruct
     */
    public function setShipmentId($shipmentId)
    {
      $this->shipmentId = $shipmentId;
      return $this;
    }

    /**
     * @return string
     */
    public function getShipmentName()
    {
      return $this->shipmentName;
    }

    /**
     * @param string $shipmentName
     * @return \Imper86\AllegroApi\Soap\Wsdl\ShipmentDataStruct
     */
    public function setShipmentName($shipmentName)
    {
      $this->shipmentName = $shipmentName;
      return $this;
    }

    /**
     * @return int
     */
    public function getShipmentType()
    {
      return $this->shipmentType;
    }

    /**
     * @param int $shipmentType
     * @return \Imper86\AllegroApi\Soap\Wsdl\ShipmentDataStruct
     */
    public function setShipmentType($shipmentType)
    {
      $this->shipmentType = $shipmentType;
      return $this;
    }

    /**
     * @return ShipmentTimeStruct
     */
    public function getShipmentTime()
    {
      return $this->shipmentTime;
    }

    /**
     * @param ShipmentTimeStruct $shipmentTime
     * @return \Imper86\AllegroApi\Soap\Wsdl\ShipmentDataStruct
     */
    public function setShipmentTime($shipmentTime)
    {
      $this->shipmentTime = $shipmentTime;
      return $this;
    }

}
