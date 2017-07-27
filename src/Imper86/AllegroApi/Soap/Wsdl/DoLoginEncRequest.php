<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class DoLoginEncRequest
{

    /**
     * @var string $userLogin
     */
    protected $userLogin = null;

    /**
     * @var string $userHashPassword
     */
    protected $userHashPassword = null;

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
     * @param string $userHashPassword
     * @param int $countryCode
     * @param string $webapiKey
     * @param int $localVersion
     */
    public function __construct($userLogin = null, $userHashPassword = null, $countryCode = null, $webapiKey = null, $localVersion = null)
    {
      $this->userLogin = $userLogin;
      $this->userHashPassword = $userHashPassword;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoLoginEncRequest
     */
    public function setUserLogin($userLogin)
    {
      $this->userLogin = $userLogin;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserHashPassword()
    {
      return $this->userHashPassword;
    }

    /**
     * @param string $userHashPassword
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoLoginEncRequest
     */
    public function setUserHashPassword($userHashPassword)
    {
      $this->userHashPassword = $userHashPassword;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoLoginEncRequest
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoLoginEncRequest
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoLoginEncRequest
     */
    public function setLocalVersion($localVersion)
    {
      $this->localVersion = $localVersion;
      return $this;
    }

}
