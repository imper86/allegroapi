<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class SortOptionsType
{

    /**
     * @var string $sortType
     */
    protected $sortType = null;

    /**
     * @var string $sortOrder
     */
    protected $sortOrder = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getSortType()
    {
      return $this->sortType;
    }

    /**
     * @param string $sortType
     * @return \Imper86\AllegroApi\Soap\Wsdl\SortOptionsType
     */
    public function setSortType($sortType)
    {
      $this->sortType = $sortType;
      return $this;
    }

    /**
     * @return string
     */
    public function getSortOrder()
    {
      return $this->sortOrder;
    }

    /**
     * @param string $sortOrder
     * @return \Imper86\AllegroApi\Soap\Wsdl\SortOptionsType
     */
    public function setSortOrder($sortOrder)
    {
      $this->sortOrder = $sortOrder;
      return $this;
    }

}
