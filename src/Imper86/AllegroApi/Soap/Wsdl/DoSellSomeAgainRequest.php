<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class DoSellSomeAgainRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var ArrayOfLong $sellItemsArray
     */
    protected $sellItemsArray = null;

    /**
     * @var int $sellStartingTime
     */
    protected $sellStartingTime = null;

    /**
     * @var int $sellAuctionDuration
     */
    protected $sellAuctionDuration = null;

    /**
     * @var int $sellOptions
     */
    protected $sellOptions = null;

    /**
     * @var ArrayOfInt $localIds
     */
    protected $localIds = null;

    /**
     * @var int $sellProlongOptions
     */
    protected $sellProlongOptions = null;

    /**
     * @param string $sessionHandle
     * @param ArrayOfLong $sellItemsArray
     * @param int $sellStartingTime
     * @param int $sellAuctionDuration
     * @param int $sellOptions
     * @param ArrayOfInt $localIds
     * @param int $sellProlongOptions
     */
    public function __construct($sessionHandle = null, $sellItemsArray = null, $sellStartingTime = null, $sellAuctionDuration = null, $sellOptions = null, $localIds = null, $sellProlongOptions = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->sellItemsArray = $sellItemsArray;
      $this->sellStartingTime = $sellStartingTime;
      $this->sellAuctionDuration = $sellAuctionDuration;
      $this->sellOptions = $sellOptions;
      $this->localIds = $localIds;
      $this->sellProlongOptions = $sellProlongOptions;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoSellSomeAgainRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getSellItemsArray()
    {
      return $this->sellItemsArray;
    }

    /**
     * @param ArrayOfLong $sellItemsArray
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoSellSomeAgainRequest
     */
    public function setSellItemsArray($sellItemsArray)
    {
      $this->sellItemsArray = $sellItemsArray;
      return $this;
    }

    /**
     * @return int
     */
    public function getSellStartingTime()
    {
      return $this->sellStartingTime;
    }

    /**
     * @param int $sellStartingTime
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoSellSomeAgainRequest
     */
    public function setSellStartingTime($sellStartingTime)
    {
      $this->sellStartingTime = $sellStartingTime;
      return $this;
    }

    /**
     * @return int
     */
    public function getSellAuctionDuration()
    {
      return $this->sellAuctionDuration;
    }

    /**
     * @param int $sellAuctionDuration
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoSellSomeAgainRequest
     */
    public function setSellAuctionDuration($sellAuctionDuration)
    {
      $this->sellAuctionDuration = $sellAuctionDuration;
      return $this;
    }

    /**
     * @return int
     */
    public function getSellOptions()
    {
      return $this->sellOptions;
    }

    /**
     * @param int $sellOptions
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoSellSomeAgainRequest
     */
    public function setSellOptions($sellOptions)
    {
      $this->sellOptions = $sellOptions;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getLocalIds()
    {
      return $this->localIds;
    }

    /**
     * @param ArrayOfInt $localIds
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoSellSomeAgainRequest
     */
    public function setLocalIds($localIds)
    {
      $this->localIds = $localIds;
      return $this;
    }

    /**
     * @return int
     */
    public function getSellProlongOptions()
    {
      return $this->sellProlongOptions;
    }

    /**
     * @param int $sellProlongOptions
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoSellSomeAgainRequest
     */
    public function setSellProlongOptions($sellProlongOptions)
    {
      $this->sellProlongOptions = $sellProlongOptions;
      return $this;
    }

}
