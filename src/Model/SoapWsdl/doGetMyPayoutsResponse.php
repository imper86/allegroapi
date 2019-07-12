<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetMyPayoutsResponse
     */
    public function setPayTransPayout($payTransPayout)
    {
      $this->payTransPayout = $payTransPayout;
      return $this;
    }

}
