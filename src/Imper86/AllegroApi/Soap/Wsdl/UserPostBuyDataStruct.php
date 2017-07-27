<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class UserPostBuyDataStruct
{

    /**
     * @var UserDataStruct $userData
     */
    protected $userData = null;

    /**
     * @var UserSentToDataStruct $userSentToData
     */
    protected $userSentToData = null;

    /**
     * @var ArrayOfString $userBankAccounts
     */
    protected $userBankAccounts = null;

    /**
     * @var CompanySecondAddressStruct $companySecondAddress
     */
    protected $companySecondAddress = null;

    /**
     * @param UserDataStruct $userData
     * @param UserSentToDataStruct $userSentToData
     * @param CompanySecondAddressStruct $companySecondAddress
     */
    public function __construct($userData = null, $userSentToData = null, $companySecondAddress = null)
    {
      $this->userData = $userData;
      $this->userSentToData = $userSentToData;
      $this->companySecondAddress = $companySecondAddress;
    }

    /**
     * @return UserDataStruct
     */
    public function getUserData()
    {
      return $this->userData;
    }

    /**
     * @param UserDataStruct $userData
     * @return \Imper86\AllegroApi\Soap\Wsdl\UserPostBuyDataStruct
     */
    public function setUserData($userData)
    {
      $this->userData = $userData;
      return $this;
    }

    /**
     * @return UserSentToDataStruct
     */
    public function getUserSentToData()
    {
      return $this->userSentToData;
    }

    /**
     * @param UserSentToDataStruct $userSentToData
     * @return \Imper86\AllegroApi\Soap\Wsdl\UserPostBuyDataStruct
     */
    public function setUserSentToData($userSentToData)
    {
      $this->userSentToData = $userSentToData;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getUserBankAccounts()
    {
      return $this->userBankAccounts;
    }

    /**
     * @param ArrayOfString $userBankAccounts
     * @return \Imper86\AllegroApi\Soap\Wsdl\UserPostBuyDataStruct
     */
    public function setUserBankAccounts($userBankAccounts)
    {
      $this->userBankAccounts = $userBankAccounts;
      return $this;
    }

    /**
     * @return CompanySecondAddressStruct
     */
    public function getCompanySecondAddress()
    {
      return $this->companySecondAddress;
    }

    /**
     * @param CompanySecondAddressStruct $companySecondAddress
     * @return \Imper86\AllegroApi\Soap\Wsdl\UserPostBuyDataStruct
     */
    public function setCompanySecondAddress($companySecondAddress)
    {
      $this->companySecondAddress = $companySecondAddress;
      return $this;
    }

}
