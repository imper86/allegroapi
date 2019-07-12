<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class SortOptionsStruct
{

    /**
     * @var int $sortType
     */
    protected $sortType = null;

    /**
     * @var int $sortOrder
     */
    protected $sortOrder = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getSortType()
    {
      return $this->sortType;
    }

    /**
     * @param int $sortType
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\SortOptionsStruct
     */
    public function setSortType($sortType)
    {
      $this->sortType = $sortType;
      return $this;
    }

    /**
     * @return int
     */
    public function getSortOrder()
    {
      return $this->sortOrder;
    }

    /**
     * @param int $sortOrder
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\SortOptionsStruct
     */
    public function setSortOrder($sortOrder)
    {
      $this->sortOrder = $sortOrder;
      return $this;
    }

}
