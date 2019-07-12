<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class DoGetBlackListUsersRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @param string $sessionHandle
     */
    public function __construct($sessionHandle = null)
    {
      $this->sessionHandle = $sessionHandle;
    }

    /**
     * @return string
     */
    public function getSessionHandle()
    {
      return $this->sessionHandle;
    }

    /**
     * @param string $sessionHandle
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetBlackListUsersRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
      return $this;
    }

}
