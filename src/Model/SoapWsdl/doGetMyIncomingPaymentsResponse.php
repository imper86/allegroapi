<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class doGetMyIncomingPaymentsResponse
{

    /**
     * @var ArrayOfUserincomingpaymentstruct $payTransIncome
     */
    protected $payTransIncome = null;

    /**
     * @param ArrayOfUserincomingpaymentstruct $payTransIncome
     */
    public function __construct($payTransIncome = null)
    {
      $this->payTransIncome = $payTransIncome;
    }

    /**
     * @return ArrayOfUserincomingpaymentstruct
     */
    public function getPayTransIncome()
    {
      return $this->payTransIncome;
    }

    /**
     * @param ArrayOfUserincomingpaymentstruct $payTransIncome
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetMyIncomingPaymentsResponse
     */
    public function setPayTransIncome($payTransIncome)
    {
      $this->payTransIncome = $payTransIncome;
      return $this;
    }

}
