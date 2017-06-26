<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class PaymentsPayoutStruct
{

    /**
     * @var int $payoutType
     */
    protected $payoutType = null;

    /**
     * @var PayoutAutoSettingsStruct $payoutAutoSettings
     */
    protected $payoutAutoSettings = null;

    /**
     * @param int $payoutType
     * @param PayoutAutoSettingsStruct $payoutAutoSettings
     */
    public function __construct($payoutType = null, $payoutAutoSettings = null)
    {
      $this->payoutType = $payoutType;
      $this->payoutAutoSettings = $payoutAutoSettings;
    }

    /**
     * @return int
     */
    public function getPayoutType()
    {
      return $this->payoutType;
    }

    /**
     * @param int $payoutType
     * @return \Imper86\AllegroApi\Soap\Wsdl\PaymentsPayoutStruct
     */
    public function setPayoutType($payoutType)
    {
      $this->payoutType = $payoutType;
      return $this;
    }

    /**
     * @return PayoutAutoSettingsStruct
     */
    public function getPayoutAutoSettings()
    {
      return $this->payoutAutoSettings;
    }

    /**
     * @param PayoutAutoSettingsStruct $payoutAutoSettings
     * @return \Imper86\AllegroApi\Soap\Wsdl\PaymentsPayoutStruct
     */
    public function setPayoutAutoSettings($payoutAutoSettings)
    {
      $this->payoutAutoSettings = $payoutAutoSettings;
      return $this;
    }

}
