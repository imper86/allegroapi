<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class doGetMySellItemsResponse
{

    /**
     * @var int $sellItemsCounter
     */
    protected $sellItemsCounter = null;

    /**
     * @var ArrayOfSellitemstruct $sellItemsList
     */
    protected $sellItemsList = null;

    /**
     * @param int $sellItemsCounter
     * @param ArrayOfSellitemstruct $sellItemsList
     */
    public function __construct($sellItemsCounter = null, $sellItemsList = null)
    {
      $this->sellItemsCounter = $sellItemsCounter;
      $this->sellItemsList = $sellItemsList;
    }

    /**
     * @return int
     */
    public function getSellItemsCounter()
    {
      return $this->sellItemsCounter;
    }

    /**
     * @param int $sellItemsCounter
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetMySellItemsResponse
     */
    public function setSellItemsCounter($sellItemsCounter)
    {
      $this->sellItemsCounter = $sellItemsCounter;
      return $this;
    }

    /**
     * @return ArrayOfSellitemstruct
     */
    public function getSellItemsList()
    {
      return $this->sellItemsList;
    }

    /**
     * @param ArrayOfSellitemstruct $sellItemsList
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetMySellItemsResponse
     */
    public function setSellItemsList($sellItemsList)
    {
      $this->sellItemsList = $sellItemsList;
      return $this;
    }

}
