<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class PostBuyItemInfoStruct
{

    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var int $itemPostBuyFormInfo
     */
    protected $itemPostBuyFormInfo = null;

    /**
     * @param int $itemId
     * @param int $itemPostBuyFormInfo
     */
    public function __construct($itemId = null, $itemPostBuyFormInfo = null)
    {
      $this->itemId = $itemId;
      $this->itemPostBuyFormInfo = $itemPostBuyFormInfo;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyItemInfoStruct
     */
    public function setItemId($itemId)
    {
      $this->itemId = $itemId;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemPostBuyFormInfo()
    {
      return $this->itemPostBuyFormInfo;
    }

    /**
     * @param int $itemPostBuyFormInfo
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyItemInfoStruct
     */
    public function setItemPostBuyFormInfo($itemPostBuyFormInfo)
    {
      $this->itemPostBuyFormInfo = $itemPostBuyFormInfo;
      return $this;
    }

}
