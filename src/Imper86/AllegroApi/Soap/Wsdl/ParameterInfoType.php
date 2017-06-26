<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class ParameterInfoType
{

    /**
     * @var string $parameterName
     */
    protected $parameterName = null;

    /**
     * @var ArrayOfString $parameterValue
     */
    protected $parameterValue = null;

    /**
     * @var string $parameterUnit
     */
    protected $parameterUnit = null;

    /**
     * @var boolean $parameterIsRange
     */
    protected $parameterIsRange = null;

    /**
     * @param string $parameterName
     * @param string $parameterUnit
     * @param boolean $parameterIsRange
     */
    public function __construct($parameterName = null, $parameterUnit = null, $parameterIsRange = null)
    {
      $this->parameterName = $parameterName;
      $this->parameterUnit = $parameterUnit;
      $this->parameterIsRange = $parameterIsRange;
    }

    /**
     * @return string
     */
    public function getParameterName()
    {
      return $this->parameterName;
    }

    /**
     * @param string $parameterName
     * @return \Imper86\AllegroApi\Soap\Wsdl\ParameterInfoType
     */
    public function setParameterName($parameterName)
    {
      $this->parameterName = $parameterName;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getParameterValue()
    {
      return $this->parameterValue;
    }

    /**
     * @param ArrayOfString $parameterValue
     * @return \Imper86\AllegroApi\Soap\Wsdl\ParameterInfoType
     */
    public function setParameterValue($parameterValue)
    {
      $this->parameterValue = $parameterValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getParameterUnit()
    {
      return $this->parameterUnit;
    }

    /**
     * @param string $parameterUnit
     * @return \Imper86\AllegroApi\Soap\Wsdl\ParameterInfoType
     */
    public function setParameterUnit($parameterUnit)
    {
      $this->parameterUnit = $parameterUnit;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getParameterIsRange()
    {
      return $this->parameterIsRange;
    }

    /**
     * @param boolean $parameterIsRange
     * @return \Imper86\AllegroApi\Soap\Wsdl\ParameterInfoType
     */
    public function setParameterIsRange($parameterIsRange)
    {
      $this->parameterIsRange = $parameterIsRange;
      return $this;
    }

}
