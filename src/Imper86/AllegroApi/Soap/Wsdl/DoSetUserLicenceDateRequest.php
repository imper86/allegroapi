<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class DoSetUserLicenceDateRequest
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
     * @var int $userLicCountry
     */
    protected $userLicCountry = null;

    /**
     * @var float $userLicDate
     */
    protected $userLicDate = null;

    /**
     * @param string $adminSessionHandle
     * @param string $userLicLogin
     * @param int $userLicCountry
     * @param float $userLicDate
     */
    public function __construct($adminSessionHandle = null, $userLicLogin = null, $userLicCountry = null, $userLicDate = null)
    {
      $this->adminSessionHandle = $adminSessionHandle;
      $this->userLicLogin = $userLicLogin;
      $this->userLicCountry = $userLicCountry;
      $this->userLicDate = $userLicDate;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoSetUserLicenceDateRequest
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoSetUserLicenceDateRequest
     */
    public function setUserLicLogin($userLicLogin)
    {
      $this->userLicLogin = $userLicLogin;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserLicCountry()
    {
      return $this->userLicCountry;
    }

    /**
     * @param int $userLicCountry
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoSetUserLicenceDateRequest
     */
    public function setUserLicCountry($userLicCountry)
    {
      $this->userLicCountry = $userLicCountry;
      return $this;
    }

    /**
     * @return float
     */
    public function getUserLicDate()
    {
      return $this->userLicDate;
    }

    /**
     * @param float $userLicDate
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoSetUserLicenceDateRequest
     */
    public function setUserLicDate($userLicDate)
    {
      $this->userLicDate = $userLicDate;
      return $this;
    }

}
