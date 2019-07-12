<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class doSetFreeDeliveryAmountResponse
{

    /**
     * @var boolean $responseStatus
     */
    protected $responseStatus = null;

    /**
     * @param boolean $responseStatus
     */
    public function __construct($responseStatus = null)
    {
      $this->responseStatus = $responseStatus;
    }

    /**
     * @return boolean
     */
    public function getResponseStatus()
    {
      return $this->responseStatus;
    }

    /**
     * @param boolean $responseStatus
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doSetFreeDeliveryAmountResponse
     */
    public function setResponseStatus($responseStatus)
    {
      $this->responseStatus = $responseStatus;
      return $this;
    }

}
