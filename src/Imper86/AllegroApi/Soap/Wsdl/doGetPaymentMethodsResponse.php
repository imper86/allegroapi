<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class doGetPaymentMethodsResponse
{

    /**
     * @var ArrayOfPaymentmethodstruct $paymentMethods
     */
    protected $paymentMethods = null;

    /**
     * @param ArrayOfPaymentmethodstruct $paymentMethods
     */
    public function __construct($paymentMethods = null)
    {
      $this->paymentMethods = $paymentMethods;
    }

    /**
     * @return ArrayOfPaymentmethodstruct
     */
    public function getPaymentMethods()
    {
      return $this->paymentMethods;
    }

    /**
     * @param ArrayOfPaymentmethodstruct $paymentMethods
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetPaymentMethodsResponse
     */
    public function setPaymentMethods($paymentMethods)
    {
      $this->paymentMethods = $paymentMethods;
      return $this;
    }

}
