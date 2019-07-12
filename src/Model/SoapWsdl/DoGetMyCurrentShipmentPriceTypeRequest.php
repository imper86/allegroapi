<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class DoGetMyCurrentShipmentPriceTypeRequest
{

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @param string $sessionId
     */
    public function __construct($sessionId = null)
    {
      $this->sessionId = $sessionId;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
      return $this->sessionId;
    }

    /**
     * @param string $sessionId
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetMyCurrentShipmentPriceTypeRequest
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

}
