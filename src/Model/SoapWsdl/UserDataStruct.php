<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class UserDataStruct
{

    /**
     * @var int $userId
     */
    protected $userId = null;

    /**
     * @var string $userLogin
     */
    protected $userLogin = null;

    /**
     * @var int $userRating
     */
    protected $userRating = null;

    /**
     * @var string $userFirstName
     */
    protected $userFirstName = null;

    /**
     * @var string $userLastName
     */
    protected $userLastName = null;

    /**
     * @var string $userMaidenName
     */
    protected $userMaidenName = null;

    /**
     * @var string $userCompany
     */
    protected $userCompany = null;

    /**
     * @var int $userCountryId
     */
    protected $userCountryId = null;

    /**
     * @var int $userStateId
     */
    protected $userStateId = null;

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
     * @var string $userEmail
     */
    protected $userEmail = null;

    /**
     * @var string $userPhone
     */
    protected $userPhone = null;

    /**
     * @var string $userPhone2
     */
    protected $userPhone2 = null;

    /**
     * @var int $userSsStatus
     */
    protected $userSsStatus = null;

    /**
     * @var int $siteCountryId
     */
    protected $siteCountryId = null;

    /**
     * @var int $userJuniorStatus
     */
    protected $userJuniorStatus = null;

    /**
     * @var int $userBirthDate
     */
    protected $userBirthDate = null;

    /**
     * @var int $userHasShop
     */
    protected $userHasShop = null;

    /**
     * @var int $userCompanyIcon
     */
    protected $userCompanyIcon = null;

    /**
     * @var int $userIsAllegroStandard
     */
    protected $userIsAllegroStandard = null;

    /**
     * @param int $userId
     * @param string $userLogin
     * @param int $userRating
     * @param string $userFirstName
     * @param string $userLastName
     * @param string $userMaidenName
     * @param string $userCompany
     * @param int $userCountryId
     * @param int $userStateId
     * @param string $userPostcode
     * @param string $userCity
     * @param string $userAddress
     * @param string $userEmail
     * @param string $userPhone
     * @param string $userPhone2
     * @param int $userSsStatus
     * @param int $siteCountryId
     * @param int $userJuniorStatus
     * @param int $userBirthDate
     * @param int $userHasShop
     * @param int $userCompanyIcon
     * @param int $userIsAllegroStandard
     */
    public function __construct($userId = null, $userLogin = null, $userRating = null, $userFirstName = null, $userLastName = null, $userMaidenName = null, $userCompany = null, $userCountryId = null, $userStateId = null, $userPostcode = null, $userCity = null, $userAddress = null, $userEmail = null, $userPhone = null, $userPhone2 = null, $userSsStatus = null, $siteCountryId = null, $userJuniorStatus = null, $userBirthDate = null, $userHasShop = null, $userCompanyIcon = null, $userIsAllegroStandard = null)
    {
      $this->userId = $userId;
      $this->userLogin = $userLogin;
      $this->userRating = $userRating;
      $this->userFirstName = $userFirstName;
      $this->userLastName = $userLastName;
      $this->userMaidenName = $userMaidenName;
      $this->userCompany = $userCompany;
      $this->userCountryId = $userCountryId;
      $this->userStateId = $userStateId;
      $this->userPostcode = $userPostcode;
      $this->userCity = $userCity;
      $this->userAddress = $userAddress;
      $this->userEmail = $userEmail;
      $this->userPhone = $userPhone;
      $this->userPhone2 = $userPhone2;
      $this->userSsStatus = $userSsStatus;
      $this->siteCountryId = $siteCountryId;
      $this->userJuniorStatus = $userJuniorStatus;
      $this->userBirthDate = $userBirthDate;
      $this->userHasShop = $userHasShop;
      $this->userCompanyIcon = $userCompanyIcon;
      $this->userIsAllegroStandard = $userIsAllegroStandard;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserDataStruct
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserDataStruct
     */
    public function setUserLogin($userLogin)
    {
      $this->userLogin = $userLogin;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserRating()
    {
      return $this->userRating;
    }

    /**
     * @param int $userRating
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserDataStruct
     */
    public function setUserRating($userRating)
    {
      $this->userRating = $userRating;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserDataStruct
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserDataStruct
     */
    public function setUserLastName($userLastName)
    {
      $this->userLastName = $userLastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserMaidenName()
    {
      return $this->userMaidenName;
    }

    /**
     * @param string $userMaidenName
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserDataStruct
     */
    public function setUserMaidenName($userMaidenName)
    {
      $this->userMaidenName = $userMaidenName;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserDataStruct
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserDataStruct
     */
    public function setUserCountryId($userCountryId)
    {
      $this->userCountryId = $userCountryId;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserStateId()
    {
      return $this->userStateId;
    }

    /**
     * @param int $userStateId
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserDataStruct
     */
    public function setUserStateId($userStateId)
    {
      $this->userStateId = $userStateId;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserDataStruct
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserDataStruct
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserDataStruct
     */
    public function setUserAddress($userAddress)
    {
      $this->userAddress = $userAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserEmail()
    {
      return $this->userEmail;
    }

    /**
     * @param string $userEmail
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserDataStruct
     */
    public function setUserEmail($userEmail)
    {
      $this->userEmail = $userEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserPhone()
    {
      return $this->userPhone;
    }

    /**
     * @param string $userPhone
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserDataStruct
     */
    public function setUserPhone($userPhone)
    {
      $this->userPhone = $userPhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserPhone2()
    {
      return $this->userPhone2;
    }

    /**
     * @param string $userPhone2
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserDataStruct
     */
    public function setUserPhone2($userPhone2)
    {
      $this->userPhone2 = $userPhone2;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserSsStatus()
    {
      return $this->userSsStatus;
    }

    /**
     * @param int $userSsStatus
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserDataStruct
     */
    public function setUserSsStatus($userSsStatus)
    {
      $this->userSsStatus = $userSsStatus;
      return $this;
    }

    /**
     * @return int
     */
    public function getSiteCountryId()
    {
      return $this->siteCountryId;
    }

    /**
     * @param int $siteCountryId
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserDataStruct
     */
    public function setSiteCountryId($siteCountryId)
    {
      $this->siteCountryId = $siteCountryId;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserJuniorStatus()
    {
      return $this->userJuniorStatus;
    }

    /**
     * @param int $userJuniorStatus
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserDataStruct
     */
    public function setUserJuniorStatus($userJuniorStatus)
    {
      $this->userJuniorStatus = $userJuniorStatus;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserBirthDate()
    {
      return $this->userBirthDate;
    }

    /**
     * @param int $userBirthDate
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserDataStruct
     */
    public function setUserBirthDate($userBirthDate)
    {
      $this->userBirthDate = $userBirthDate;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserHasShop()
    {
      return $this->userHasShop;
    }

    /**
     * @param int $userHasShop
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserDataStruct
     */
    public function setUserHasShop($userHasShop)
    {
      $this->userHasShop = $userHasShop;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserCompanyIcon()
    {
      return $this->userCompanyIcon;
    }

    /**
     * @param int $userCompanyIcon
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserDataStruct
     */
    public function setUserCompanyIcon($userCompanyIcon)
    {
      $this->userCompanyIcon = $userCompanyIcon;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserIsAllegroStandard()
    {
      return $this->userIsAllegroStandard;
    }

    /**
     * @param int $userIsAllegroStandard
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserDataStruct
     */
    public function setUserIsAllegroStandard($userIsAllegroStandard)
    {
      $this->userIsAllegroStandard = $userIsAllegroStandard;
      return $this;
    }

}
