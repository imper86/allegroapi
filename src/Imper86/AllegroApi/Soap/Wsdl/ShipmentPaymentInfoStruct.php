<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class ShipmentPaymentInfoStruct
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
     * @var float $shipmentAmount
     */
    protected $shipmentAmount = null;

    /**
     * @var int $shipmentPaymentType
     */
    protected $shipmentPaymentType = null;

    /**
     * @var ArrayOfLong $shipmentItemIds
     */
    protected $shipmentItemIds = null;

    /**
     * @param int $shipmentId
     * @param string $shipmentName
     * @param float $shipmentAmount
     * @param int $shipmentPaymentType
     */
    public function __construct($shipmentId = null, $shipmentName = null, $shipmentAmount = null, $shipmentPaymentType = null)
    {
      $this->shipmentId = $shipmentId;
      $this->shipmentName = $shipmentName;
      $this->shipmentAmount = $shipmentAmount;
      $this->shipmentPaymentType = $shipmentPaymentType;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\ShipmentPaymentInfoStruct
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\ShipmentPaymentInfoStruct
     */
    public function setShipmentName($shipmentName)
    {
      $this->shipmentName = $shipmentName;
      return $this;
    }

    /**
     * @return float
     */
    public function getShipmentAmount()
    {
      return $this->shipmentAmount;
    }

    /**
     * @param float $shipmentAmount
     * @return \Imper86\AllegroApi\Soap\Wsdl\ShipmentPaymentInfoStruct
     */
    public function setShipmentAmount($shipmentAmount)
    {
      $this->shipmentAmount = $shipmentAmount;
      return $this;
    }

    /**
     * @return int
     */
    public function getShipmentPaymentType()
    {
      return $this->shipmentPaymentType;
    }

    /**
     * @param int $shipmentPaymentType
     * @return \Imper86\AllegroApi\Soap\Wsdl\ShipmentPaymentInfoStruct
     */
    public function setShipmentPaymentType($shipmentPaymentType)
    {
      $this->shipmentPaymentType = $shipmentPaymentType;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getShipmentItemIds()
    {
      return $this->shipmentItemIds;
    }

    /**
     * @param ArrayOfLong $shipmentItemIds
     * @return \Imper86\AllegroApi\Soap\Wsdl\ShipmentPaymentInfoStruct
     */
    public function setShipmentItemIds($shipmentItemIds)
    {
      $this->shipmentItemIds = $shipmentItemIds;
      return $this;
    }

}
