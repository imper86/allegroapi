<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class DoSellSomeAgainInShopRequest
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
     * @var int $sellShopDuration
     */
    protected $sellShopDuration = null;

    /**
     * @var int $sellShopOptions
     */
    protected $sellShopOptions = null;

    /**
     * @var int $sellProlongOptions
     */
    protected $sellProlongOptions = null;

    /**
     * @var int $sellShopCategory
     */
    protected $sellShopCategory = null;

    /**
     * @var ArrayOfInt $localIds
     */
    protected $localIds = null;

    /**
     * @param string $sessionHandle
     * @param ArrayOfLong $sellItemsArray
     * @param int $sellStartingTime
     * @param int $sellShopDuration
     * @param int $sellShopOptions
     * @param int $sellProlongOptions
     * @param int $sellShopCategory
     * @param ArrayOfInt $localIds
     */
    public function __construct($sessionHandle = null, $sellItemsArray = null, $sellStartingTime = null, $sellShopDuration = null, $sellShopOptions = null, $sellProlongOptions = null, $sellShopCategory = null, $localIds = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->sellItemsArray = $sellItemsArray;
      $this->sellStartingTime = $sellStartingTime;
      $this->sellShopDuration = $sellShopDuration;
      $this->sellShopOptions = $sellShopOptions;
      $this->sellProlongOptions = $sellProlongOptions;
      $this->sellShopCategory = $sellShopCategory;
      $this->localIds = $localIds;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoSellSomeAgainInShopRequest
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoSellSomeAgainInShopRequest
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoSellSomeAgainInShopRequest
     */
    public function setSellStartingTime($sellStartingTime)
    {
      $this->sellStartingTime = $sellStartingTime;
      return $this;
    }

    /**
     * @return int
     */
    public function getSellShopDuration()
    {
      return $this->sellShopDuration;
    }

    /**
     * @param int $sellShopDuration
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoSellSomeAgainInShopRequest
     */
    public function setSellShopDuration($sellShopDuration)
    {
      $this->sellShopDuration = $sellShopDuration;
      return $this;
    }

    /**
     * @return int
     */
    public function getSellShopOptions()
    {
      return $this->sellShopOptions;
    }

    /**
     * @param int $sellShopOptions
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoSellSomeAgainInShopRequest
     */
    public function setSellShopOptions($sellShopOptions)
    {
      $this->sellShopOptions = $sellShopOptions;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoSellSomeAgainInShopRequest
     */
    public function setSellProlongOptions($sellProlongOptions)
    {
      $this->sellProlongOptions = $sellProlongOptions;
      return $this;
    }

    /**
     * @return int
     */
    public function getSellShopCategory()
    {
      return $this->sellShopCategory;
    }

    /**
     * @param int $sellShopCategory
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoSellSomeAgainInShopRequest
     */
    public function setSellShopCategory($sellShopCategory)
    {
      $this->sellShopCategory = $sellShopCategory;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoSellSomeAgainInShopRequest
     */
    public function setLocalIds($localIds)
    {
      $this->localIds = $localIds;
      return $this;
    }

}
