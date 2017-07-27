<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class doChangePriceItemResponse
{

    /**
     * @var string $itemInfo
     */
    protected $itemInfo = null;

    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @param string $itemInfo
     * @param int $itemId
     */
    public function __construct($itemInfo = null, $itemId = null)
    {
      $this->itemInfo = $itemInfo;
      $this->itemId = $itemId;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\doChangePriceItemResponse
     */
    public function setItemInfo($itemInfo)
    {
      $this->itemInfo = $itemInfo;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\doChangePriceItemResponse
     */
    public function setItemId($itemId)
    {
      $this->itemId = $itemId;
      return $this;
    }

}
