<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class doMyBillingResponse
{

    /**
     * @var string $myBilling
     */
    protected $myBilling = null;

    /**
     * @param string $myBilling
     */
    public function __construct($myBilling = null)
    {
      $this->myBilling = $myBilling;
    }

    /**
     * @return string
     */
    public function getMyBilling()
    {
      return $this->myBilling;
    }

    /**
     * @param string $myBilling
     * @return \Imper86\AllegroApi\Soap\Wsdl\doMyBillingResponse
     */
    public function setMyBilling($myBilling)
    {
      $this->myBilling = $myBilling;
      return $this;
    }

}
