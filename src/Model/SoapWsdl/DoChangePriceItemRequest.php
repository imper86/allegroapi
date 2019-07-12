<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class DoChangePriceItemRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var float $newStartingPrice
     */
    protected $newStartingPrice = null;

    /**
     * @var float $newReservePrice
     */
    protected $newReservePrice = null;

    /**
     * @var float $newBuyNowPrice
     */
    protected $newBuyNowPrice = null;

    /**
     * @var float $newAdvertisementPrice
     */
    protected $newAdvertisementPrice = null;

    /**
     * @param string $sessionHandle
     * @param int $itemId
     * @param float $newStartingPrice
     * @param float $newReservePrice
     * @param float $newBuyNowPrice
     * @param float $newAdvertisementPrice
     */
    public function __construct($sessionHandle = null, $itemId = null, $newStartingPrice = null, $newReservePrice = null, $newBuyNowPrice = null, $newAdvertisementPrice = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->itemId = $itemId;
      $this->newStartingPrice = $newStartingPrice;
      $this->newReservePrice = $newReservePrice;
      $this->newBuyNowPrice = $newBuyNowPrice;
      $this->newAdvertisementPrice = $newAdvertisementPrice;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoChangePriceItemRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemId()
    {
      return $this->itemId;
    }

    /**
     * @param int $itemId
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoChangePriceItemRequest
     */
    public function setItemId($itemId)
    {
      $this->itemId = $itemId;
      return $this;
    }

    /**
     * @return float
     */
    public function getNewStartingPrice()
    {
      return $this->newStartingPrice;
    }

    /**
     * @param float $newStartingPrice
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoChangePriceItemRequest
     */
    public function setNewStartingPrice($newStartingPrice)
    {
      $this->newStartingPrice = $newStartingPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getNewReservePrice()
    {
      return $this->newReservePrice;
    }

    /**
     * @param float $newReservePrice
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoChangePriceItemRequest
     */
    public function setNewReservePrice($newReservePrice)
    {
      $this->newReservePrice = $newReservePrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getNewBuyNowPrice()
    {
      return $this->newBuyNowPrice;
    }

    /**
     * @param float $newBuyNowPrice
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoChangePriceItemRequest
     */
    public function setNewBuyNowPrice($newBuyNowPrice)
    {
      $this->newBuyNowPrice = $newBuyNowPrice;
      return $this;
    }

    /**
     * @return float
     */
    public function getNewAdvertisementPrice()
    {
      return $this->newAdvertisementPrice;
    }

    /**
     * @param float $newAdvertisementPrice
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoChangePriceItemRequest
     */
    public function setNewAdvertisementPrice($newAdvertisementPrice)
    {
      $this->newAdvertisementPrice = $newAdvertisementPrice;
      return $this;
    }

}
