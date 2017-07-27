<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class NewPostBuyFormSellerStruct
{

    /**
     * @var int $sellerId
     */
    protected $sellerId = null;

    /**
     * @var ArrayOfLong $sellerItemIds
     */
    protected $sellerItemIds = null;

    /**
     * @var int $sellerShipmentId
     */
    protected $sellerShipmentId = null;

    /**
     * @var int $sellerGdId
     */
    protected $sellerGdId = null;

    /**
     * @var float $sellerShipmentAmount
     */
    protected $sellerShipmentAmount = null;

    /**
     * @var string $sellerMessageTo
     */
    protected $sellerMessageTo = null;

    /**
     * @param int $sellerId
     * @param int $sellerShipmentId
     */
    public function __construct($sellerId = null, $sellerShipmentId = null)
    {
      $this->sellerId = $sellerId;
      $this->sellerShipmentId = $sellerShipmentId;
    }

    /**
     * @return int
     */
    public function getSellerId()
    {
      return $this->sellerId;
    }

    /**
     * @param int $sellerId
     * @return \Imper86\AllegroApi\Soap\Wsdl\NewPostBuyFormSellerStruct
     */
    public function setSellerId($sellerId)
    {
      $this->sellerId = $sellerId;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getSellerItemIds()
    {
      return $this->sellerItemIds;
    }

    /**
     * @param ArrayOfLong $sellerItemIds
     * @return \Imper86\AllegroApi\Soap\Wsdl\NewPostBuyFormSellerStruct
     */
    public function setSellerItemIds($sellerItemIds)
    {
      $this->sellerItemIds = $sellerItemIds;
      return $this;
    }

    /**
     * @return int
     */
    public function getSellerShipmentId()
    {
      return $this->sellerShipmentId;
    }

    /**
     * @param int $sellerShipmentId
     * @return \Imper86\AllegroApi\Soap\Wsdl\NewPostBuyFormSellerStruct
     */
    public function setSellerShipmentId($sellerShipmentId)
    {
      $this->sellerShipmentId = $sellerShipmentId;
      return $this;
    }

    /**
     * @return int
     */
    public function getSellerGdId()
    {
      return $this->sellerGdId;
    }

    /**
     * @param int $sellerGdId
     * @return \Imper86\AllegroApi\Soap\Wsdl\NewPostBuyFormSellerStruct
     */
    public function setSellerGdId($sellerGdId)
    {
      $this->sellerGdId = $sellerGdId;
      return $this;
    }

    /**
     * @return float
     */
    public function getSellerShipmentAmount()
    {
      return $this->sellerShipmentAmount;
    }

    /**
     * @param float $sellerShipmentAmount
     * @return \Imper86\AllegroApi\Soap\Wsdl\NewPostBuyFormSellerStruct
     */
    public function setSellerShipmentAmount($sellerShipmentAmount)
    {
      $this->sellerShipmentAmount = $sellerShipmentAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellerMessageTo()
    {
      return $this->sellerMessageTo;
    }

    /**
     * @param string $sellerMessageTo
     * @return \Imper86\AllegroApi\Soap\Wsdl\NewPostBuyFormSellerStruct
     */
    public function setSellerMessageTo($sellerMessageTo)
    {
      $this->sellerMessageTo = $sellerMessageTo;
      return $this;
    }

}
