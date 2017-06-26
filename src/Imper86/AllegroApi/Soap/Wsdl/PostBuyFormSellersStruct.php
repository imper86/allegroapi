<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class PostBuyFormSellersStruct
{

    /**
     * @var int $postBuyFormSellerId
     */
    protected $postBuyFormSellerId = null;

    /**
     * @var string $postBuyFormSellerName
     */
    protected $postBuyFormSellerName = null;

    /**
     * @var ArrayOfPostbuyformitemstruct $postBuyFormItems
     */
    protected $postBuyFormItems = null;

    /**
     * @var int $postBuyFormShipmentId
     */
    protected $postBuyFormShipmentId = null;

    /**
     * @var float $postBuyFormPostageAmount
     */
    protected $postBuyFormPostageAmount = null;

    /**
     * @var string $postBuyFormMsgToSeller
     */
    protected $postBuyFormMsgToSeller = null;

    /**
     * @var float $postBuyFormAmount
     */
    protected $postBuyFormAmount = null;

    /**
     * @var ArrayOfLong $postBuyFormSurchargesList
     */
    protected $postBuyFormSurchargesList = null;

    /**
     * @var ArrayOfPostbuyformshipmenttrackingstruct $postBuyFormShipmentTracking
     */
    protected $postBuyFormShipmentTracking = null;

    /**
     * @var PostBuyFormAddressStruct $postBuyFormGdAddress
     */
    protected $postBuyFormGdAddress = null;

    /**
     * @var string $postBuyFormGdAdditionalInfo
     */
    protected $postBuyFormGdAdditionalInfo = null;

    /**
     * @var int $postBuyFormSentBySeller
     */
    protected $postBuyFormSentBySeller = null;

    /**
     * @param int $postBuyFormSellerId
     * @param string $postBuyFormSellerName
     * @param int $postBuyFormShipmentId
     * @param float $postBuyFormPostageAmount
     * @param string $postBuyFormMsgToSeller
     * @param float $postBuyFormAmount
     * @param PostBuyFormAddressStruct $postBuyFormGdAddress
     * @param string $postBuyFormGdAdditionalInfo
     * @param int $postBuyFormSentBySeller
     */
    public function __construct($postBuyFormSellerId = null, $postBuyFormSellerName = null, $postBuyFormShipmentId = null, $postBuyFormPostageAmount = null, $postBuyFormMsgToSeller = null, $postBuyFormAmount = null, $postBuyFormGdAddress = null, $postBuyFormGdAdditionalInfo = null, $postBuyFormSentBySeller = null)
    {
      $this->postBuyFormSellerId = $postBuyFormSellerId;
      $this->postBuyFormSellerName = $postBuyFormSellerName;
      $this->postBuyFormShipmentId = $postBuyFormShipmentId;
      $this->postBuyFormPostageAmount = $postBuyFormPostageAmount;
      $this->postBuyFormMsgToSeller = $postBuyFormMsgToSeller;
      $this->postBuyFormAmount = $postBuyFormAmount;
      $this->postBuyFormGdAddress = $postBuyFormGdAddress;
      $this->postBuyFormGdAdditionalInfo = $postBuyFormGdAdditionalInfo;
      $this->postBuyFormSentBySeller = $postBuyFormSentBySeller;
    }

    /**
     * @return int
     */
    public function getPostBuyFormSellerId()
    {
      return $this->postBuyFormSellerId;
    }

    /**
     * @param int $postBuyFormSellerId
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormSellersStruct
     */
    public function setPostBuyFormSellerId($postBuyFormSellerId)
    {
      $this->postBuyFormSellerId = $postBuyFormSellerId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormSellerName()
    {
      return $this->postBuyFormSellerName;
    }

    /**
     * @param string $postBuyFormSellerName
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormSellersStruct
     */
    public function setPostBuyFormSellerName($postBuyFormSellerName)
    {
      $this->postBuyFormSellerName = $postBuyFormSellerName;
      return $this;
    }

    /**
     * @return ArrayOfPostbuyformitemstruct
     */
    public function getPostBuyFormItems()
    {
      return $this->postBuyFormItems;
    }

    /**
     * @param ArrayOfPostbuyformitemstruct $postBuyFormItems
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormSellersStruct
     */
    public function setPostBuyFormItems($postBuyFormItems)
    {
      $this->postBuyFormItems = $postBuyFormItems;
      return $this;
    }

    /**
     * @return int
     */
    public function getPostBuyFormShipmentId()
    {
      return $this->postBuyFormShipmentId;
    }

    /**
     * @param int $postBuyFormShipmentId
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormSellersStruct
     */
    public function setPostBuyFormShipmentId($postBuyFormShipmentId)
    {
      $this->postBuyFormShipmentId = $postBuyFormShipmentId;
      return $this;
    }

    /**
     * @return float
     */
    public function getPostBuyFormPostageAmount()
    {
      return $this->postBuyFormPostageAmount;
    }

    /**
     * @param float $postBuyFormPostageAmount
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormSellersStruct
     */
    public function setPostBuyFormPostageAmount($postBuyFormPostageAmount)
    {
      $this->postBuyFormPostageAmount = $postBuyFormPostageAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormMsgToSeller()
    {
      return $this->postBuyFormMsgToSeller;
    }

    /**
     * @param string $postBuyFormMsgToSeller
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormSellersStruct
     */
    public function setPostBuyFormMsgToSeller($postBuyFormMsgToSeller)
    {
      $this->postBuyFormMsgToSeller = $postBuyFormMsgToSeller;
      return $this;
    }

    /**
     * @return float
     */
    public function getPostBuyFormAmount()
    {
      return $this->postBuyFormAmount;
    }

    /**
     * @param float $postBuyFormAmount
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormSellersStruct
     */
    public function setPostBuyFormAmount($postBuyFormAmount)
    {
      $this->postBuyFormAmount = $postBuyFormAmount;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getPostBuyFormSurchargesList()
    {
      return $this->postBuyFormSurchargesList;
    }

    /**
     * @param ArrayOfLong $postBuyFormSurchargesList
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormSellersStruct
     */
    public function setPostBuyFormSurchargesList($postBuyFormSurchargesList)
    {
      $this->postBuyFormSurchargesList = $postBuyFormSurchargesList;
      return $this;
    }

    /**
     * @return ArrayOfPostbuyformshipmenttrackingstruct
     */
    public function getPostBuyFormShipmentTracking()
    {
      return $this->postBuyFormShipmentTracking;
    }

    /**
     * @param ArrayOfPostbuyformshipmenttrackingstruct $postBuyFormShipmentTracking
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormSellersStruct
     */
    public function setPostBuyFormShipmentTracking($postBuyFormShipmentTracking)
    {
      $this->postBuyFormShipmentTracking = $postBuyFormShipmentTracking;
      return $this;
    }

    /**
     * @return PostBuyFormAddressStruct
     */
    public function getPostBuyFormGdAddress()
    {
      return $this->postBuyFormGdAddress;
    }

    /**
     * @param PostBuyFormAddressStruct $postBuyFormGdAddress
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormSellersStruct
     */
    public function setPostBuyFormGdAddress($postBuyFormGdAddress)
    {
      $this->postBuyFormGdAddress = $postBuyFormGdAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormGdAdditionalInfo()
    {
      return $this->postBuyFormGdAdditionalInfo;
    }

    /**
     * @param string $postBuyFormGdAdditionalInfo
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormSellersStruct
     */
    public function setPostBuyFormGdAdditionalInfo($postBuyFormGdAdditionalInfo)
    {
      $this->postBuyFormGdAdditionalInfo = $postBuyFormGdAdditionalInfo;
      return $this;
    }

    /**
     * @return int
     */
    public function getPostBuyFormSentBySeller()
    {
      return $this->postBuyFormSentBySeller;
    }

    /**
     * @param int $postBuyFormSentBySeller
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormSellersStruct
     */
    public function setPostBuyFormSentBySeller($postBuyFormSentBySeller)
    {
      $this->postBuyFormSentBySeller = $postBuyFormSentBySeller;
      return $this;
    }

}
