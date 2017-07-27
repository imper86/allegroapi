<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

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
     * @param string $sessionHandle
     * @param int $itemId
     * @param float $newStartingPrice
     * @param float $newReservePrice
     * @param float $newBuyNowPrice
     */
    public function __construct($sessionHandle = null, $itemId = null, $newStartingPrice = null, $newReservePrice = null, $newBuyNowPrice = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->itemId = $itemId;
      $this->newStartingPrice = $newStartingPrice;
      $this->newReservePrice = $newReservePrice;
      $this->newBuyNowPrice = $newBuyNowPrice;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoChangePriceItemRequest
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoChangePriceItemRequest
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoChangePriceItemRequest
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoChangePriceItemRequest
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoChangePriceItemRequest
     */
    public function setNewBuyNowPrice($newBuyNowPrice)
    {
      $this->newBuyNowPrice = $newBuyNowPrice;
      return $this;
    }

}
