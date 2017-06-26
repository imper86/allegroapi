<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class PayoutAutoSettingsStruct
{

    /**
     * @var float $payoutAutoAmount
     */
    protected $payoutAutoAmount = null;

    /**
     * @var PayoutAutoFrequencyStruct $payoutAutoFrequency
     */
    protected $payoutAutoFrequency = null;

    /**
     * @param float $payoutAutoAmount
     * @param PayoutAutoFrequencyStruct $payoutAutoFrequency
     */
    public function __construct($payoutAutoAmount = null, $payoutAutoFrequency = null)
    {
      $this->payoutAutoAmount = $payoutAutoAmount;
      $this->payoutAutoFrequency = $payoutAutoFrequency;
    }

    /**
     * @return float
     */
    public function getPayoutAutoAmount()
    {
      return $this->payoutAutoAmount;
    }

    /**
     * @param float $payoutAutoAmount
     * @return \Imper86\AllegroApi\Soap\Wsdl\PayoutAutoSettingsStruct
     */
    public function setPayoutAutoAmount($payoutAutoAmount)
    {
      $this->payoutAutoAmount = $payoutAutoAmount;
      return $this;
    }

    /**
     * @return PayoutAutoFrequencyStruct
     */
    public function getPayoutAutoFrequency()
    {
      return $this->payoutAutoFrequency;
    }

    /**
     * @param PayoutAutoFrequencyStruct $payoutAutoFrequency
     * @return \Imper86\AllegroApi\Soap\Wsdl\PayoutAutoSettingsStruct
     */
    public function setPayoutAutoFrequency($payoutAutoFrequency)
    {
      $this->payoutAutoFrequency = $payoutAutoFrequency;
      return $this;
    }

}
