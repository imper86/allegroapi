<?php

namespace Imper69\AllegroApi\Soap\Wsdl;

class doGetPostBuyDataResponse
{

    /**
     * @var ArrayOfItempostbuydatastruct $itemsPostBuyData
     */
    protected $itemsPostBuyData = null;

    /**
     * @param ArrayOfItempostbuydatastruct $itemsPostBuyData
     */
    public function __construct($itemsPostBuyData = null)
    {
      $this->itemsPostBuyData = $itemsPostBuyData;
    }

    /**
     * @return ArrayOfItempostbuydatastruct
     */
    public function getItemsPostBuyData()
    {
      return $this->itemsPostBuyData;
    }

    /**
     * @param ArrayOfItempostbuydatastruct $itemsPostBuyData
     * @return \Imper69\AllegroApi\Soap\Wsdl\doGetPostBuyDataResponse
     */
    public function setItemsPostBuyData($itemsPostBuyData)
    {
      $this->itemsPostBuyData = $itemsPostBuyData;
      return $this;
    }

}
