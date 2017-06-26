<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class DoGetUserLoginRequest
{

    /**
     * @var int $countryId
     */
    protected $countryId = null;

    /**
     * @var int $userId
     */
    protected $userId = null;

    /**
     * @var string $webapiKey
     */
    protected $webapiKey = null;

    /**
     * @param int $countryId
     * @param int $userId
     * @param string $webapiKey
     */
    public function __construct($countryId = null, $userId = null, $webapiKey = null)
    {
      $this->countryId = $countryId;
      $this->userId = $userId;
      $this->webapiKey = $webapiKey;
    }

    /**
     * @return int
     */
    public function getCountryId()
    {
      return $this->countryId;
    }

    /**
     * @param int $countryId
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetUserLoginRequest
     */
    public function setCountryId($countryId)
    {
      $this->countryId = $countryId;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
      return $this->userId;
    }

    /**
     * @param int $userId
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetUserLoginRequest
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetUserLoginRequest
     */
    public function setWebapiKey($webapiKey)
    {
      $this->webapiKey = $webapiKey;
      return $this;
    }

}
