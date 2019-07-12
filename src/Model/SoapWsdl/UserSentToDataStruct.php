<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class UserSentToDataStruct
{

    /**
     * @var int $userId
     */
    protected $userId = null;

    /**
     * @var string $userFirstName
     */
    protected $userFirstName = null;

    /**
     * @var string $userLastName
     */
    protected $userLastName = null;

    /**
     * @var string $userCompany
     */
    protected $userCompany = null;

    /**
     * @var int $userCountryId
     */
    protected $userCountryId = null;

    /**
     * @var string $userPostcode
     */
    protected $userPostcode = null;

    /**
     * @var string $userCity
     */
    protected $userCity = null;

    /**
     * @var string $userAddress
     */
    protected $userAddress = null;

    /**
     * @param int $userId
     * @param string $userFirstName
     * @param string $userLastName
     * @param string $userCompany
     * @param int $userCountryId
     * @param string $userPostcode
     * @param string $userCity
     * @param string $userAddress
     */
    public function __construct($userId = null, $userFirstName = null, $userLastName = null, $userCompany = null, $userCountryId = null, $userPostcode = null, $userCity = null, $userAddress = null)
    {
      $this->userId = $userId;
      $this->userFirstName = $userFirstName;
      $this->userLastName = $userLastName;
      $this->userCompany = $userCompany;
      $this->userCountryId = $userCountryId;
      $this->userPostcode = $userPostcode;
      $this->userCity = $userCity;
      $this->userAddress = $userAddress;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserSentToDataStruct
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserFirstName()
    {
      return $this->userFirstName;
    }

    /**
     * @param string $userFirstName
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserSentToDataStruct
     */
    public function setUserFirstName($userFirstName)
    {
      $this->userFirstName = $userFirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserLastName()
    {
      return $this->userLastName;
    }

    /**
     * @param string $userLastName
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserSentToDataStruct
     */
    public function setUserLastName($userLastName)
    {
      $this->userLastName = $userLastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserCompany()
    {
      return $this->userCompany;
    }

    /**
     * @param string $userCompany
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserSentToDataStruct
     */
    public function setUserCompany($userCompany)
    {
      $this->userCompany = $userCompany;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserCountryId()
    {
      return $this->userCountryId;
    }

    /**
     * @param int $userCountryId
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserSentToDataStruct
     */
    public function setUserCountryId($userCountryId)
    {
      $this->userCountryId = $userCountryId;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserPostcode()
    {
      return $this->userPostcode;
    }

    /**
     * @param string $userPostcode
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserSentToDataStruct
     */
    public function setUserPostcode($userPostcode)
    {
      $this->userPostcode = $userPostcode;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserCity()
    {
      return $this->userCity;
    }

    /**
     * @param string $userCity
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserSentToDataStruct
     */
    public function setUserCity($userCity)
    {
      $this->userCity = $userCity;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserAddress()
    {
      return $this->userAddress;
    }

    /**
     * @param string $userAddress
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserSentToDataStruct
     */
    public function setUserAddress($userAddress)
    {
      $this->userAddress = $userAddress;
      return $this;
    }

}
