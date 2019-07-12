<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class ItemPriceStruct
{

    /**
     * @var int $priceType
     */
    protected $priceType = null;

    /**
     * @var float $priceValue
     */
    protected $priceValue = null;

    /**
     * @param int $priceType
     * @param float $priceValue
     */
    public function __construct($priceType = null, $priceValue = null)
    {
      $this->priceType = $priceType;
      $this->priceValue = $priceValue;
    }

    /**
     * @return int
     */
    public function getPriceType()
    {
      return $this->priceType;
    }

    /**
     * @param int $priceType
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\ItemPriceStruct
     */
    public function setPriceType($priceType)
    {
      $this->priceType = $priceType;
      return $this;
    }

    /**
     * @return float
     */
    public function getPriceValue()
    {
      return $this->priceValue;
    }

    /**
     * @param float $priceValue
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\ItemPriceStruct
     */
    public function setPriceValue($priceValue)
    {
      $this->priceValue = $priceValue;
      return $this;
    }

}
