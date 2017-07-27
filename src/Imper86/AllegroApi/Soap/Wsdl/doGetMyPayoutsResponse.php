<?php

namespace Imper69\AllegroApi\Soap\Wsdl;

class doGetMyPayoutsResponse
{

    /**
     * @var ArrayOfUserpayoutstruct $payTransPayout
     */
    protected $payTransPayout = null;

    /**
     * @param ArrayOfUserpayoutstruct $payTransPayout
     */
    public function __construct($payTransPayout = null)
    {
      $this->payTransPayout = $payTransPayout;
    }

    /**
     * @return ArrayOfUserpayoutstruct
     */
    public function getPayTransPayout()
    {
      return $this->payTransPayout;
    }

    /**
     * @param ArrayOfUserpayoutstruct $payTransPayout
     * @return \Imper69\AllegroApi\Soap\Wsdl\doGetMyPayoutsResponse
     */
    public function setPayTransPayout($payTransPayout)
    {
      $this->payTransPayout = $payTransPayout;
      return $this;
    }

}
