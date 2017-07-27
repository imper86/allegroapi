<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class doGetMyPaymentsResponse
{

    /**
     * @var ArrayOfUserpaymentstruct $payTransPayment
     */
    protected $payTransPayment = null;

    /**
     * @param ArrayOfUserpaymentstruct $payTransPayment
     */
    public function __construct($payTransPayment = null)
    {
      $this->payTransPayment = $payTransPayment;
    }

    /**
     * @return ArrayOfUserpaymentstruct
     */
    public function getPayTransPayment()
    {
      return $this->payTransPayment;
    }

    /**
     * @param ArrayOfUserpaymentstruct $payTransPayment
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetMyPaymentsResponse
     */
    public function setPayTransPayment($payTransPayment)
    {
      $this->payTransPayment = $payTransPayment;
      return $this;
    }

}
