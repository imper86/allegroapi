<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class PaymentsUserDataStruct
{

    /**
     * @var string $userFullName
     */
    protected $userFullName = null;

    /**
     * @var string $userAddress
     */
    protected $userAddress = null;

    /**
     * @var string $userPostcode
     */
    protected $userPostcode = null;

    /**
     * @var string $userCity
     */
    protected $userCity = null;

    /**
     * @var int $userCountry
     */
    protected $userCountry = null;

    /**
     * @var string $userPhone
     */
    protected $userPhone = null;

    /**
     * @param string $userFullName
     * @param string $userAddress
     * @param string $userPostcode
     * @param string $userCity
     * @param int $userCountry
     * @param string $userPhone
     */
    public function __construct($userFullName = null, $userAddress = null, $userPostcode = null, $userCity = null, $userCountry = null, $userPhone = null)
    {
      $this->userFullName = $userFullName;
      $this->userAddress = $userAddress;
      $this->userPostcode = $userPostcode;
      $this->userCity = $userCity;
      $this->userCountry = $userCountry;
      $this->userPhone = $userPhone;
    }

    /**
     * @return string
     */
    public function getUserFullName()
    {
      return $this->userFullName;
    }

    /**
     * @param string $userFullName
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PaymentsUserDataStruct
     */
    public function setUserFullName($userFullName)
    {
      $this->userFullName = $userFullName;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PaymentsUserDataStruct
     */
    public function setUserAddress($userAddress)
    {
      $this->userAddress = $userAddress;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PaymentsUserDataStruct
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PaymentsUserDataStruct
     */
    public function setUserCity($userCity)
    {
      $this->userCity = $userCity;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserCountry()
    {
      return $this->userCountry;
    }

    /**
     * @param int $userCountry
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PaymentsUserDataStruct
     */
    public function setUserCountry($userCountry)
    {
      $this->userCountry = $userCountry;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PaymentsUserDataStruct
     */
    public function setUserPhone($userPhone)
    {
      $this->userPhone = $userPhone;
      return $this;
    }

}
