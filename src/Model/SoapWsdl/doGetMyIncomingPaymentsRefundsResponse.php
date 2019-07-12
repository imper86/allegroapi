<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class doGetMyIncomingPaymentsRefundsResponse
{

    /**
     * @var ArrayOfUserincomingpaymentrefundsstruct $payTransIncomeRefunds
     */
    protected $payTransIncomeRefunds = null;

    /**
     * @param ArrayOfUserincomingpaymentrefundsstruct $payTransIncomeRefunds
     */
    public function __construct($payTransIncomeRefunds = null)
    {
      $this->payTransIncomeRefunds = $payTransIncomeRefunds;
    }

    /**
     * @return ArrayOfUserincomingpaymentrefundsstruct
     */
    public function getPayTransIncomeRefunds()
    {
      return $this->payTransIncomeRefunds;
    }

    /**
     * @param ArrayOfUserincomingpaymentrefundsstruct $payTransIncomeRefunds
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetMyIncomingPaymentsRefundsResponse
     */
    public function setPayTransIncomeRefunds($payTransIncomeRefunds)
    {
      $this->payTransIncomeRefunds = $payTransIncomeRefunds;
      return $this;
    }

}
