<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class AddressUserDataStruct
{

    /**
     * @var string $userCompany
     */
    protected $userCompany = null;

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
     * @param string $userFullName
     * @param string $userAddress
     * @param string $userPostcode
     * @param string $userCity
     */
    public function __construct($userFullName = null, $userAddress = null, $userPostcode = null, $userCity = null)
    {
      $this->userFullName = $userFullName;
      $this->userAddress = $userAddress;
      $this->userPostcode = $userPostcode;
      $this->userCity = $userCity;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\AddressUserDataStruct
     */
    public function setUserCompany($userCompany)
    {
      $this->userCompany = $userCompany;
      return $this;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\AddressUserDataStruct
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\AddressUserDataStruct
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\AddressUserDataStruct
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\AddressUserDataStruct
     */
    public function setUserCity($userCity)
    {
      $this->userCity = $userCity;
      return $this;
    }

}
