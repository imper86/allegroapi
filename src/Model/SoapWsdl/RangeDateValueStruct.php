<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class RangeDateValueStruct
{

    /**
     * @var string $fvalueRangeDateMin
     */
    protected $fvalueRangeDateMin = null;

    /**
     * @var string $fvalueRangeDateMax
     */
    protected $fvalueRangeDateMax = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getFvalueRangeDateMin()
    {
      return $this->fvalueRangeDateMin;
    }

    /**
     * @param string $fvalueRangeDateMin
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\RangeDateValueStruct
     */
    public function setFvalueRangeDateMin($fvalueRangeDateMin)
    {
      $this->fvalueRangeDateMin = $fvalueRangeDateMin;
      return $this;
    }

    /**
     * @return string
     */
    public function getFvalueRangeDateMax()
    {
      return $this->fvalueRangeDateMax;
    }

    /**
     * @param string $fvalueRangeDateMax
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\RangeDateValueStruct
     */
    public function setFvalueRangeDateMax($fvalueRangeDateMax)
    {
      $this->fvalueRangeDateMax = $fvalueRangeDateMax;
      return $this;
    }

}
