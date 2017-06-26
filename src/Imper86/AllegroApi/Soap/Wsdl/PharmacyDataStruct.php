<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class PharmacyDataStruct
{

    /**
     * @var string $pharmacyOpeningDate
     */
    protected $pharmacyOpeningDate = null;

    /**
     * @var string $pharmacyExpirationDate
     */
    protected $pharmacyExpirationDate = null;

    /**
     * @var string $pharmacyName
     */
    protected $pharmacyName = null;

    /**
     * @var string $pharmacyPharmacistFullName
     */
    protected $pharmacyPharmacistFullName = null;

    /**
     * @var string $pharmacyAddress
     */
    protected $pharmacyAddress = null;

    /**
     * @var string $pharmacyPostcode
     */
    protected $pharmacyPostcode = null;

    /**
     * @var string $pharmacyCity
     */
    protected $pharmacyCity = null;

    /**
     * @var string $pharmacyCommune
     */
    protected $pharmacyCommune = null;

    /**
     * @var int $pharmacyCountryId
     */
    protected $pharmacyCountryId = null;

    /**
     * @var int $pharmacyStateId
     */
    protected $pharmacyStateId = null;

    /**
     * @var string $pharmacyPermitNumber
     */
    protected $pharmacyPermitNumber = null;

    /**
     * @var string $pharmacyPermitInfo
     */
    protected $pharmacyPermitInfo = null;

    /**
     * @param string $pharmacyOpeningDate
     * @param string $pharmacyExpirationDate
     * @param string $pharmacyName
     * @param string $pharmacyPharmacistFullName
     * @param string $pharmacyAddress
     * @param string $pharmacyPostcode
     * @param string $pharmacyCity
     * @param string $pharmacyCommune
     * @param int $pharmacyCountryId
     * @param int $pharmacyStateId
     * @param string $pharmacyPermitNumber
     * @param string $pharmacyPermitInfo
     */
    public function __construct($pharmacyOpeningDate = null, $pharmacyExpirationDate = null, $pharmacyName = null, $pharmacyPharmacistFullName = null, $pharmacyAddress = null, $pharmacyPostcode = null, $pharmacyCity = null, $pharmacyCommune = null, $pharmacyCountryId = null, $pharmacyStateId = null, $pharmacyPermitNumber = null, $pharmacyPermitInfo = null)
    {
      $this->pharmacyOpeningDate = $pharmacyOpeningDate;
      $this->pharmacyExpirationDate = $pharmacyExpirationDate;
      $this->pharmacyName = $pharmacyName;
      $this->pharmacyPharmacistFullName = $pharmacyPharmacistFullName;
      $this->pharmacyAddress = $pharmacyAddress;
      $this->pharmacyPostcode = $pharmacyPostcode;
      $this->pharmacyCity = $pharmacyCity;
      $this->pharmacyCommune = $pharmacyCommune;
      $this->pharmacyCountryId = $pharmacyCountryId;
      $this->pharmacyStateId = $pharmacyStateId;
      $this->pharmacyPermitNumber = $pharmacyPermitNumber;
      $this->pharmacyPermitInfo = $pharmacyPermitInfo;
    }

    /**
     * @return string
     */
    public function getPharmacyOpeningDate()
    {
      return $this->pharmacyOpeningDate;
    }

    /**
     * @param string $pharmacyOpeningDate
     * @return \Imper86\AllegroApi\Soap\Wsdl\PharmacyDataStruct
     */
    public function setPharmacyOpeningDate($pharmacyOpeningDate)
    {
      $this->pharmacyOpeningDate = $pharmacyOpeningDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getPharmacyExpirationDate()
    {
      return $this->pharmacyExpirationDate;
    }

    /**
     * @param string $pharmacyExpirationDate
     * @return \Imper86\AllegroApi\Soap\Wsdl\PharmacyDataStruct
     */
    public function setPharmacyExpirationDate($pharmacyExpirationDate)
    {
      $this->pharmacyExpirationDate = $pharmacyExpirationDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getPharmacyName()
    {
      return $this->pharmacyName;
    }

    /**
     * @param string $pharmacyName
     * @return \Imper86\AllegroApi\Soap\Wsdl\PharmacyDataStruct
     */
    public function setPharmacyName($pharmacyName)
    {
      $this->pharmacyName = $pharmacyName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPharmacyPharmacistFullName()
    {
      return $this->pharmacyPharmacistFullName;
    }

    /**
     * @param string $pharmacyPharmacistFullName
     * @return \Imper86\AllegroApi\Soap\Wsdl\PharmacyDataStruct
     */
    public function setPharmacyPharmacistFullName($pharmacyPharmacistFullName)
    {
      $this->pharmacyPharmacistFullName = $pharmacyPharmacistFullName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPharmacyAddress()
    {
      return $this->pharmacyAddress;
    }

    /**
     * @param string $pharmacyAddress
     * @return \Imper86\AllegroApi\Soap\Wsdl\PharmacyDataStruct
     */
    public function setPharmacyAddress($pharmacyAddress)
    {
      $this->pharmacyAddress = $pharmacyAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getPharmacyPostcode()
    {
      return $this->pharmacyPostcode;
    }

    /**
     * @param string $pharmacyPostcode
     * @return \Imper86\AllegroApi\Soap\Wsdl\PharmacyDataStruct
     */
    public function setPharmacyPostcode($pharmacyPostcode)
    {
      $this->pharmacyPostcode = $pharmacyPostcode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPharmacyCity()
    {
      return $this->pharmacyCity;
    }

    /**
     * @param string $pharmacyCity
     * @return \Imper86\AllegroApi\Soap\Wsdl\PharmacyDataStruct
     */
    public function setPharmacyCity($pharmacyCity)
    {
      $this->pharmacyCity = $pharmacyCity;
      return $this;
    }

    /**
     * @return string
     */
    public function getPharmacyCommune()
    {
      return $this->pharmacyCommune;
    }

    /**
     * @param string $pharmacyCommune
     * @return \Imper86\AllegroApi\Soap\Wsdl\PharmacyDataStruct
     */
    public function setPharmacyCommune($pharmacyCommune)
    {
      $this->pharmacyCommune = $pharmacyCommune;
      return $this;
    }

    /**
     * @return int
     */
    public function getPharmacyCountryId()
    {
      return $this->pharmacyCountryId;
    }

    /**
     * @param int $pharmacyCountryId
     * @return \Imper86\AllegroApi\Soap\Wsdl\PharmacyDataStruct
     */
    public function setPharmacyCountryId($pharmacyCountryId)
    {
      $this->pharmacyCountryId = $pharmacyCountryId;
      return $this;
    }

    /**
     * @return int
     */
    public function getPharmacyStateId()
    {
      return $this->pharmacyStateId;
    }

    /**
     * @param int $pharmacyStateId
     * @return \Imper86\AllegroApi\Soap\Wsdl\PharmacyDataStruct
     */
    public function setPharmacyStateId($pharmacyStateId)
    {
      $this->pharmacyStateId = $pharmacyStateId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPharmacyPermitNumber()
    {
      return $this->pharmacyPermitNumber;
    }

    /**
     * @param string $pharmacyPermitNumber
     * @return \Imper86\AllegroApi\Soap\Wsdl\PharmacyDataStruct
     */
    public function setPharmacyPermitNumber($pharmacyPermitNumber)
    {
      $this->pharmacyPermitNumber = $pharmacyPermitNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getPharmacyPermitInfo()
    {
      return $this->pharmacyPermitInfo;
    }

    /**
     * @param string $pharmacyPermitInfo
     * @return \Imper86\AllegroApi\Soap\Wsdl\PharmacyDataStruct
     */
    public function setPharmacyPermitInfo($pharmacyPermitInfo)
    {
      $this->pharmacyPermitInfo = $pharmacyPermitInfo;
      return $this;
    }

}
