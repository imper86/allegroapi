<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class SellFilterOptionsStruct
{

    /**
     * @var int $filterFormat
     */
    protected $filterFormat = null;

    /**
     * @var int $filterBids
     */
    protected $filterBids = null;

    /**
     * @var int $filterToEnd
     */
    protected $filterToEnd = null;

    /**
     * @var int $filterFromStart
     */
    protected $filterFromStart = null;

    /**
     * @var int $filterAutoListing
     */
    protected $filterAutoListing = null;

    /**
     * @var FilterPriceStruct $filterPrice
     */
    protected $filterPrice = null;

    /**
     * @var int $filterDurationType
     */
    protected $filterDurationType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getFilterFormat()
    {
      return $this->filterFormat;
    }

    /**
     * @param int $filterFormat
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellFilterOptionsStruct
     */
    public function setFilterFormat($filterFormat)
    {
      $this->filterFormat = $filterFormat;
      return $this;
    }

    /**
     * @return int
     */
    public function getFilterBids()
    {
      return $this->filterBids;
    }

    /**
     * @param int $filterBids
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellFilterOptionsStruct
     */
    public function setFilterBids($filterBids)
    {
      $this->filterBids = $filterBids;
      return $this;
    }

    /**
     * @return int
     */
    public function getFilterToEnd()
    {
      return $this->filterToEnd;
    }

    /**
     * @param int $filterToEnd
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellFilterOptionsStruct
     */
    public function setFilterToEnd($filterToEnd)
    {
      $this->filterToEnd = $filterToEnd;
      return $this;
    }

    /**
     * @return int
     */
    public function getFilterFromStart()
    {
      return $this->filterFromStart;
    }

    /**
     * @param int $filterFromStart
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellFilterOptionsStruct
     */
    public function setFilterFromStart($filterFromStart)
    {
      $this->filterFromStart = $filterFromStart;
      return $this;
    }

    /**
     * @return int
     */
    public function getFilterAutoListing()
    {
      return $this->filterAutoListing;
    }

    /**
     * @param int $filterAutoListing
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellFilterOptionsStruct
     */
    public function setFilterAutoListing($filterAutoListing)
    {
      $this->filterAutoListing = $filterAutoListing;
      return $this;
    }

    /**
     * @return FilterPriceStruct
     */
    public function getFilterPrice()
    {
      return $this->filterPrice;
    }

    /**
     * @param FilterPriceStruct $filterPrice
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellFilterOptionsStruct
     */
    public function setFilterPrice($filterPrice)
    {
      $this->filterPrice = $filterPrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getFilterDurationType()
    {
      return $this->filterDurationType;
    }

    /**
     * @param int $filterDurationType
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellFilterOptionsStruct
     */
    public function setFilterDurationType($filterDurationType)
    {
      $this->filterDurationType = $filterDurationType;
      return $this;
    }

}
