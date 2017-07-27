<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class RangeFloatValueStruct
{

    /**
     * @var float $fvalueRangeFloatMin
     */
    protected $fvalueRangeFloatMin = null;

    /**
     * @var float $fvalueRangeFloatMax
     */
    protected $fvalueRangeFloatMax = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return float
     */
    public function getFvalueRangeFloatMin()
    {
      return $this->fvalueRangeFloatMin;
    }

    /**
     * @param float $fvalueRangeFloatMin
     * @return \Imper86\AllegroApi\Soap\Wsdl\RangeFloatValueStruct
     */
    public function setFvalueRangeFloatMin($fvalueRangeFloatMin)
    {
      $this->fvalueRangeFloatMin = $fvalueRangeFloatMin;
      return $this;
    }

    /**
     * @return float
     */
    public function getFvalueRangeFloatMax()
    {
      return $this->fvalueRangeFloatMax;
    }

    /**
     * @param float $fvalueRangeFloatMax
     * @return \Imper86\AllegroApi\Soap\Wsdl\RangeFloatValueStruct
     */
    public function setFvalueRangeFloatMax($fvalueRangeFloatMax)
    {
      $this->fvalueRangeFloatMax = $fvalueRangeFloatMax;
      return $this;
    }

}
