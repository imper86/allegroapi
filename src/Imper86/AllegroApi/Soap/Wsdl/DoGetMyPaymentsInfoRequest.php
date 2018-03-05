<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class DoGetMyPaymentsInfoRequest
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetMyPaymentsInfoRequest
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

}