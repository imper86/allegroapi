<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class doChangeQuantityItemResponse
{

    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var string $itemInfo
     */
    protected $itemInfo = null;

    /**
     * @var int $itemQuantityLeft
     */
    protected $itemQuantityLeft = null;

    /**
     * @var int $itemQuantitySold
     */
    protected $itemQuantitySold = null;

    /**
     * @param int $itemId
     * @param string $itemInfo
     * @param int $itemQuantityLeft
     * @param int $itemQuantitySold
     */
    public function __construct($itemId = null, $itemInfo = null, $itemQuantityLeft = null, $itemQuantitySold = null)
    {
      $this->itemId = $itemId;
      $this->itemInfo = $itemInfo;
      $this->itemQuantityLeft = $itemQuantityLeft;
      $this->itemQuantitySold = $itemQuantitySold;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\doChangeQuantityItemResponse
     */
    public function setItemId($itemId)
    {
      $this->itemId = $itemId;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemInfo()
    {
      return $this->itemInfo;
    }

    /**
     * @param string $itemInfo
     * @return \Imper86\AllegroApi\Soap\Wsdl\doChangeQuantityItemResponse
     */
    public function setItemInfo($itemInfo)
    {
      $this->itemInfo = $itemInfo;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemQuantityLeft()
    {
      return $this->itemQuantityLeft;
    }

    /**
     * @param int $itemQuantityLeft
     * @return \Imper86\AllegroApi\Soap\Wsdl\doChangeQuantityItemResponse
     */
    public function setItemQuantityLeft($itemQuantityLeft)
    {
      $this->itemQuantityLeft = $itemQuantityLeft;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemQuantitySold()
    {
      return $this->itemQuantitySold;
    }

    /**
     * @param int $itemQuantitySold
     * @return \Imper86\AllegroApi\Soap\Wsdl\doChangeQuantityItemResponse
     */
    public function setItemQuantitySold($itemQuantitySold)
    {
      $this->itemQuantitySold = $itemQuantitySold;
      return $this;
    }

}
