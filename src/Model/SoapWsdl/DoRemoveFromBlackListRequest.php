<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class DoRemoveFromBlackListRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var ArrayOfLong $usersIdArray
     */
    protected $usersIdArray = null;

    /**
     * @param string $sessionHandle
     * @param ArrayOfLong $usersIdArray
     */
    public function __construct($sessionHandle = null, $usersIdArray = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->usersIdArray = $usersIdArray;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoRemoveFromBlackListRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getUsersIdArray()
    {
      return $this->usersIdArray;
    }

    /**
     * @param ArrayOfLong $usersIdArray
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoRemoveFromBlackListRequest
     */
    public function setUsersIdArray($usersIdArray)
    {
      $this->usersIdArray = $usersIdArray;
      return $this;
    }

}
