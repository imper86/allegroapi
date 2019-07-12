<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class PayoutAutoFrequencyStruct
{

    /**
     * @var int $frequencyType
     */
    protected $frequencyType = null;

    /**
     * @var int $frequencyWeekValue
     */
    protected $frequencyWeekValue = null;

    /**
     * @var int $frequencyMonthValue
     */
    protected $frequencyMonthValue = null;

    /**
     * @param int $frequencyType
     * @param int $frequencyWeekValue
     * @param int $frequencyMonthValue
     */
    public function __construct($frequencyType = null, $frequencyWeekValue = null, $frequencyMonthValue = null)
    {
      $this->frequencyType = $frequencyType;
      $this->frequencyWeekValue = $frequencyWeekValue;
      $this->frequencyMonthValue = $frequencyMonthValue;
    }

    /**
     * @return int
     */
    public function getFrequencyType()
    {
      return $this->frequencyType;
    }

    /**
     * @param int $frequencyType
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PayoutAutoFrequencyStruct
     */
    public function setFrequencyType($frequencyType)
    {
      $this->frequencyType = $frequencyType;
      return $this;
    }

    /**
     * @return int
     */
    public function getFrequencyWeekValue()
    {
      return $this->frequencyWeekValue;
    }

    /**
     * @param int $frequencyWeekValue
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PayoutAutoFrequencyStruct
     */
    public function setFrequencyWeekValue($frequencyWeekValue)
    {
      $this->frequencyWeekValue = $frequencyWeekValue;
      return $this;
    }

    /**
     * @return int
     */
    public function getFrequencyMonthValue()
    {
      return $this->frequencyMonthValue;
    }

    /**
     * @param int $frequencyMonthValue
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PayoutAutoFrequencyStruct
     */
    public function setFrequencyMonthValue($frequencyMonthValue)
    {
      $this->frequencyMonthValue = $frequencyMonthValue;
      return $this;
    }

}
