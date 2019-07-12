<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class DoBidItemRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var int $bidItId
     */
    protected $bidItId = null;

    /**
     * @var float $bidUserPrice
     */
    protected $bidUserPrice = null;

    /**
     * @var int $bidQuantity
     */
    protected $bidQuantity = null;

    /**
     * @var int $bidBuyNow
     */
    protected $bidBuyNow = null;

    /**
     * @var PharmacyRecipientDataStruct $pharmacyRecipientData
     */
    protected $pharmacyRecipientData = null;

    /**
     * @var string $variantId
     */
    protected $variantId = null;

    /**
     * @param string $sessionHandle
     * @param int $bidItId
     * @param float $bidUserPrice
     * @param int $bidQuantity
     * @param int $bidBuyNow
     * @param PharmacyRecipientDataStruct $pharmacyRecipientData
     * @param string $variantId
     */
    public function __construct($sessionHandle = null, $bidItId = null, $bidUserPrice = null, $bidQuantity = null, $bidBuyNow = null, $pharmacyRecipientData = null, $variantId = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->bidItId = $bidItId;
      $this->bidUserPrice = $bidUserPrice;
      $this->bidQuantity = $bidQuantity;
      $this->bidBuyNow = $bidBuyNow;
      $this->pharmacyRecipientData = $pharmacyRecipientData;
      $this->variantId = $variantId;
    }

    /**
     * @return string
     */
    public function getSessionHandle()
    {
      return $this->sessionHandle;
    }

    /**
     * @param string $sessionHandle
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoBidItemRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
      return $this;
    }

    /**
     * @return int
     */
    public function getBidItId()
    {
      return $this->bidItId;
    }

    /**
     * @param int $bidItId
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoBidItemRequest
     */
    public function setBidItId($bidItId)
    {
      $this->bidItId = $bidItId;
      return $this;
    }

    /**
     * @return float
     */
    public function getBidUserPrice()
    {
      return $this->bidUserPrice;
    }

    /**
     * @param float $bidUserPrice
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoBidItemRequest
     */
    public function setBidUserPrice($bidUserPrice)
    {
      $this->bidUserPrice = $bidUserPrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getBidQuantity()
    {
      return $this->bidQuantity;
    }

    /**
     * @param int $bidQuantity
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoBidItemRequest
     */
    public function setBidQuantity($bidQuantity)
    {
      $this->bidQuantity = $bidQuantity;
      return $this;
    }

    /**
     * @return int
     */
    public function getBidBuyNow()
    {
      return $this->bidBuyNow;
    }

    /**
     * @param int $bidBuyNow
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoBidItemRequest
     */
    public function setBidBuyNow($bidBuyNow)
    {
      $this->bidBuyNow = $bidBuyNow;
      return $this;
    }

    /**
     * @return PharmacyRecipientDataStruct
     */
    public function getPharmacyRecipientData()
    {
      return $this->pharmacyRecipientData;
    }

    /**
     * @param PharmacyRecipientDataStruct $pharmacyRecipientData
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoBidItemRequest
     */
    public function setPharmacyRecipientData($pharmacyRecipientData)
    {
      $this->pharmacyRecipientData = $pharmacyRecipientData;
      return $this;
    }

    /**
     * @return string
     */
    public function getVariantId()
    {
      return $this->variantId;
    }

    /**
     * @param string $variantId
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoBidItemRequest
     */
    public function setVariantId($variantId)
    {
      $this->variantId = $variantId;
      return $this;
    }

}
