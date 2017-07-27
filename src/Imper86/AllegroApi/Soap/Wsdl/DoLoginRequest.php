<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class DoLoginRequest
{

    /**
     * @var string $userLogin
     */
    protected $userLogin = null;

    /**
     * @var string $userPassword
     */
    protected $userPassword = null;

    /**
     * @var int $countryCode
     */
    protected $countryCode = null;

    /**
     * @var string $webapiKey
     */
    protected $webapiKey = null;

    /**
     * @var int $localVersion
     */
    protected $localVersion = null;

    /**
     * @param string $userLogin
     * @param string $userPassword
     * @param int $countryCode
     * @param string $webapiKey
     * @param int $localVersion
     */
    public function __construct($userLogin = null, $userPassword = null, $countryCode = null, $webapiKey = null, $localVersion = null)
    {
      $this->userLogin = $userLogin;
      $this->userPassword = $userPassword;
      $this->countryCode = $countryCode;
      $this->webapiKey = $webapiKey;
      $this->localVersion = $localVersion;
    }

    /**
     * @return string
     */
    public function getUserLogin()
    {
      return $this->userLogin;
    }

    /**
     * @param string $userLogin
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoLoginRequest
     */
    public function setUserLogin($userLogin)
    {
      $this->userLogin = $userLogin;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserPassword()
    {
      return $this->userPassword;
    }

    /**
     * @param string $userPassword
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoLoginRequest
     */
    public function setUserPassword($userPassword)
    {
      $this->userPassword = $userPassword;
      return $this;
    }

    /**
     * @return int
     */
    public function getCountryCode()
    {
      return $this->countryCode;
    }

    /**
     * @param int $countryCode
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoLoginRequest
     */
    public function setCountryCode($countryCode)
    {
      $this->countryCode = $countryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getWebapiKey()
    {
      return $this->webapiKey;
    }

    /**
     * @param string $webapiKey
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoLoginRequest
     */
    public function setWebapiKey($webapiKey)
    {
      $this->webapiKey = $webapiKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getLocalVersion()
    {
      return $this->localVersion;
    }

    /**
     * @param int $localVersion
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoLoginRequest
     */
    public function setLocalVersion($localVersion)
    {
      $this->localVersion = $localVersion;
      return $this;
    }

}
