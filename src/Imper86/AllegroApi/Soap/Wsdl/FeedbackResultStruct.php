<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class FeedbackResultStruct
{

    /**
     * @var int $feItemId
     */
    protected $feItemId = null;

    /**
     * @var int $feId
     */
    protected $feId = null;

    /**
     * @var string $feFaultCode
     */
    protected $feFaultCode = null;

    /**
     * @var string $feFaultDesc
     */
    protected $feFaultDesc = null;

    /**
     * @param int $feItemId
     * @param int $feId
     * @param string $feFaultCode
     * @param string $feFaultDesc
     */
    public function __construct($feItemId = null, $feId = null, $feFaultCode = null, $feFaultDesc = null)
    {
      $this->feItemId = $feItemId;
      $this->feId = $feId;
      $this->feFaultCode = $feFaultCode;
      $this->feFaultDesc = $feFaultDesc;
    }

    /**
     * @return int
     */
    public function getFeItemId()
    {
      return $this->feItemId;
    }

    /**
     * @param int $feItemId
     * @return \Imper86\AllegroApi\Soap\Wsdl\FeedbackResultStruct
     */
    public function setFeItemId($feItemId)
    {
      $this->feItemId = $feItemId;
      return $this;
    }

    /**
     * @return int
     */
    public function getFeId()
    {
      return $this->feId;
    }

    /**
     * @param int $feId
     * @return \Imper86\AllegroApi\Soap\Wsdl\FeedbackResultStruct
     */
    public function setFeId($feId)
    {
      $this->feId = $feId;
      return $this;
    }

    /**
     * @return string
     */
    public function getFeFaultCode()
    {
      return $this->feFaultCode;
    }

    /**
     * @param string $feFaultCode
     * @return \Imper86\AllegroApi\Soap\Wsdl\FeedbackResultStruct
     */
    public function setFeFaultCode($feFaultCode)
    {
      $this->feFaultCode = $feFaultCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getFeFaultDesc()
    {
      return $this->feFaultDesc;
    }

    /**
     * @param string $feFaultDesc
     * @return \Imper86\AllegroApi\Soap\Wsdl\FeedbackResultStruct
     */
    public function setFeFaultDesc($feFaultDesc)
    {
      $this->feFaultDesc = $feFaultDesc;
      return $this;
    }

}
