<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class doCheckNewAuctionExtResponse
{

    /**
     * @var string $itemPrice
     */
    protected $itemPrice = null;

    /**
     * @var string $itemPriceDesc
     */
    protected $itemPriceDesc = null;

    /**
     * @var int $itemIsAllegroStandard
     */
    protected $itemIsAllegroStandard = null;

    /**
     * @param string $itemPrice
     * @param string $itemPriceDesc
     * @param int $itemIsAllegroStandard
     */
    public function __construct($itemPrice = null, $itemPriceDesc = null, $itemIsAllegroStandard = null)
    {
      $this->itemPrice = $itemPrice;
      $this->itemPriceDesc = $itemPriceDesc;
      $this->itemIsAllegroStandard = $itemIsAllegroStandard;
    }

    /**
     * @return string
     */
    public function getItemPrice()
    {
      return $this->itemPrice;
    }

    /**
     * @param string $itemPrice
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doCheckNewAuctionExtResponse
     */
    public function setItemPrice($itemPrice)
    {
      $this->itemPrice = $itemPrice;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemPriceDesc()
    {
      return $this->itemPriceDesc;
    }

    /**
     * @param string $itemPriceDesc
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doCheckNewAuctionExtResponse
     */
    public function setItemPriceDesc($itemPriceDesc)
    {
      $this->itemPriceDesc = $itemPriceDesc;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemIsAllegroStandard()
    {
      return $this->itemIsAllegroStandard;
    }

    /**
     * @param int $itemIsAllegroStandard
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doCheckNewAuctionExtResponse
     */
    public function setItemIsAllegroStandard($itemIsAllegroStandard)
    {
      $this->itemIsAllegroStandard = $itemIsAllegroStandard;
      return $this;
    }

}
