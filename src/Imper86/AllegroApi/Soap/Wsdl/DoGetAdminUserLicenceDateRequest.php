<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class DoGetAdminUserLicenceDateRequest
{

    /**
     * @var string $adminSessionHandle
     */
    protected $adminSessionHandle = null;

    /**
     * @var string $userLicLogin
     */
    protected $userLicLogin = null;

    /**
     * @param string $adminSessionHandle
     * @param string $userLicLogin
     */
    public function __construct($adminSessionHandle = null, $userLicLogin = null)
    {
      $this->adminSessionHandle = $adminSessionHandle;
      $this->userLicLogin = $userLicLogin;
    }

    /**
     * @return string
     */
    public function getAdminSessionHandle()
    {
      return $this->adminSessionHandle;
    }

    /**
     * @param string $adminSessionHandle
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetAdminUserLicenceDateRequest
     */
    public function setAdminSessionHandle($adminSessionHandle)
    {
      $this->adminSessionHandle = $adminSessionHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserLicLogin()
    {
      return $this->userLicLogin;
    }

    /**
     * @param string $userLicLogin
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetAdminUserLicenceDateRequest
     */
    public function setUserLicLogin($userLicLogin)
    {
      $this->userLicLogin = $userLicLogin;
      return $this;
    }

}
