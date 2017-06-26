<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class CompanySecondAddressStruct
{

    /**
     * @var string $companyWorkerFirstName
     */
    protected $companyWorkerFirstName = null;

    /**
     * @var string $companyWorkerLastName
     */
    protected $companyWorkerLastName = null;

    /**
     * @var string $companyAddress
     */
    protected $companyAddress = null;

    /**
     * @var string $companyPostcode
     */
    protected $companyPostcode = null;

    /**
     * @var string $companyCity
     */
    protected $companyCity = null;

    /**
     * @var int $companyCountryId
     */
    protected $companyCountryId = null;

    /**
     * @var int $companyStateId
     */
    protected $companyStateId = null;

    /**
     * @param string $companyWorkerFirstName
     * @param string $companyWorkerLastName
     * @param string $companyAddress
     * @param string $companyPostcode
     * @param string $companyCity
     * @param int $companyCountryId
     * @param int $companyStateId
     */
    public function __construct($companyWorkerFirstName = null, $companyWorkerLastName = null, $companyAddress = null, $companyPostcode = null, $companyCity = null, $companyCountryId = null, $companyStateId = null)
    {
      $this->companyWorkerFirstName = $companyWorkerFirstName;
      $this->companyWorkerLastName = $companyWorkerLastName;
      $this->companyAddress = $companyAddress;
      $this->companyPostcode = $companyPostcode;
      $this->companyCity = $companyCity;
      $this->companyCountryId = $companyCountryId;
      $this->companyStateId = $companyStateId;
    }

    /**
     * @return string
     */
    public function getCompanyWorkerFirstName()
    {
      return $this->companyWorkerFirstName;
    }

    /**
     * @param string $companyWorkerFirstName
     * @return \Imper86\AllegroApi\Soap\Wsdl\CompanySecondAddressStruct
     */
    public function setCompanyWorkerFirstName($companyWorkerFirstName)
    {
      $this->companyWorkerFirstName = $companyWorkerFirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyWorkerLastName()
    {
      return $this->companyWorkerLastName;
    }

    /**
     * @param string $companyWorkerLastName
     * @return \Imper86\AllegroApi\Soap\Wsdl\CompanySecondAddressStruct
     */
    public function setCompanyWorkerLastName($companyWorkerLastName)
    {
      $this->companyWorkerLastName = $companyWorkerLastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyAddress()
    {
      return $this->companyAddress;
    }

    /**
     * @param string $companyAddress
     * @return \Imper86\AllegroApi\Soap\Wsdl\CompanySecondAddressStruct
     */
    public function setCompanyAddress($companyAddress)
    {
      $this->companyAddress = $companyAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyPostcode()
    {
      return $this->companyPostcode;
    }

    /**
     * @param string $companyPostcode
     * @return \Imper86\AllegroApi\Soap\Wsdl\CompanySecondAddressStruct
     */
    public function setCompanyPostcode($companyPostcode)
    {
      $this->companyPostcode = $companyPostcode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyCity()
    {
      return $this->companyCity;
    }

    /**
     * @param string $companyCity
     * @return \Imper86\AllegroApi\Soap\Wsdl\CompanySecondAddressStruct
     */
    public function setCompanyCity($companyCity)
    {
      $this->companyCity = $companyCity;
      return $this;
    }

    /**
     * @return int
     */
    public function getCompanyCountryId()
    {
      return $this->companyCountryId;
    }

    /**
     * @param int $companyCountryId
     * @return \Imper86\AllegroApi\Soap\Wsdl\CompanySecondAddressStruct
     */
    public function setCompanyCountryId($companyCountryId)
    {
      $this->companyCountryId = $companyCountryId;
      return $this;
    }

    /**
     * @return int
     */
    public function getCompanyStateId()
    {
      return $this->companyStateId;
    }

    /**
     * @param int $companyStateId
     * @return \Imper86\AllegroApi\Soap\Wsdl\CompanySecondAddressStruct
     */
    public function setCompanyStateId($companyStateId)
    {
      $this->companyStateId = $companyStateId;
      return $this;
    }

}
