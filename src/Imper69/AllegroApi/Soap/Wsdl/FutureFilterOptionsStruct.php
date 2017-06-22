<?php

namespace Imper69\AllegroApi\Soap\Wsdl;

class FutureFilterOptionsStruct
{

    /**
     * @var int $filterFormat
     */
    protected $filterFormat = null;

    
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
     * @return \Imper69\AllegroApi\Soap\Wsdl\FutureFilterOptionsStruct
     */
    public function setFilterFormat($filterFormat)
    {
      $this->filterFormat = $filterFormat;
      return $this;
    }

}
