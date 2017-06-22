<?php

namespace Imper69\AllegroApi\Soap\Wsdl;

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
     * @return \Imper69\AllegroApi\Soap\Wsdl\RangeDateValueStruct
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
     * @return \Imper69\AllegroApi\Soap\Wsdl\RangeDateValueStruct
     */
    public function setFvalueRangeDateMax($fvalueRangeDateMax)
    {
      $this->fvalueRangeDateMax = $fvalueRangeDateMax;
      return $this;
    }

}
