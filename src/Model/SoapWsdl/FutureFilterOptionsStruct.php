<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\FutureFilterOptionsStruct
     */
    public function setFilterFormat($filterFormat)
    {
      $this->filterFormat = $filterFormat;
      return $this;
    }

}
