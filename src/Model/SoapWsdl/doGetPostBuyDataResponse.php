<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetPostBuyDataResponse
     */
    public function setItemsPostBuyData($itemsPostBuyData)
    {
      $this->itemsPostBuyData = $itemsPostBuyData;
      return $this;
    }

}
