<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class AlcoholDataStruct
{

    /**
     * @var string $alcoholOpeningDate
     */
    protected $alcoholOpeningDate = null;

    /**
     * @var string $alcoholExpirationDate
     */
    protected $alcoholExpirationDate = null;

    /**
     * @var string $alcoholShopName
     */
    protected $alcoholShopName = null;

    /**
     * @var string $alcoholShopAddress
     */
    protected $alcoholShopAddress = null;

    /**
     * @var string $alcoholShopPostcode
     */
    protected $alcoholShopPostcode = null;

    /**
     * @var string $alcoholShopCity
     */
    protected $alcoholShopCity = null;

    /**
     * @var string $alcoholShopCommune
     */
    protected $alcoholShopCommune = null;

    /**
     * @var int $alcoholShopCountryId
     */
    protected $alcoholShopCountryId = null;

    /**
     * @var int $alcoholShopStateId
     */
    protected $alcoholShopStateId = null;

    /**
     * @var string $alcoholPermitNumber
     */
    protected $alcoholPermitNumber = null;

    /**
     * @var string $alcoholPermitAuthority
     */
    protected $alcoholPermitAuthority = null;

    /**
     * @var string $alcoholPermitInfo
     */
    protected $alcoholPermitInfo = null;

    /**
     * @param string $alcoholOpeningDate
     * @param string $alcoholExpirationDate
     * @param string $alcoholShopName
     * @param string $alcoholShopAddress
     * @param string $alcoholShopPostcode
     * @param string $alcoholShopCity
     * @param string $alcoholShopCommune
     * @param int $alcoholShopCountryId
     * @param int $alcoholShopStateId
     * @param string $alcoholPermitNumber
     * @param string $alcoholPermitAuthority
     * @param string $alcoholPermitInfo
     */
    public function __construct($alcoholOpeningDate = null, $alcoholExpirationDate = null, $alcoholShopName = null, $alcoholShopAddress = null, $alcoholShopPostcode = null, $alcoholShopCity = null, $alcoholShopCommune = null, $alcoholShopCountryId = null, $alcoholShopStateId = null, $alcoholPermitNumber = null, $alcoholPermitAuthority = null, $alcoholPermitInfo = null)
    {
      $this->alcoholOpeningDate = $alcoholOpeningDate;
      $this->alcoholExpirationDate = $alcoholExpirationDate;
      $this->alcoholShopName = $alcoholShopName;
      $this->alcoholShopAddress = $alcoholShopAddress;
      $this->alcoholShopPostcode = $alcoholShopPostcode;
      $this->alcoholShopCity = $alcoholShopCity;
      $this->alcoholShopCommune = $alcoholShopCommune;
      $this->alcoholShopCountryId = $alcoholShopCountryId;
      $this->alcoholShopStateId = $alcoholShopStateId;
      $this->alcoholPermitNumber = $alcoholPermitNumber;
      $this->alcoholPermitAuthority = $alcoholPermitAuthority;
      $this->alcoholPermitInfo = $alcoholPermitInfo;
    }

    /**
     * @return string
     */
    public function getAlcoholOpeningDate()
    {
      return $this->alcoholOpeningDate;
    }

    /**
     * @param string $alcoholOpeningDate
     * @return \Imper86\AllegroApi\Soap\Wsdl\AlcoholDataStruct
     */
    public function setAlcoholOpeningDate($alcoholOpeningDate)
    {
      $this->alcoholOpeningDate = $alcoholOpeningDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getAlcoholExpirationDate()
    {
      return $this->alcoholExpirationDate;
    }

    /**
     * @param string $alcoholExpirationDate
     * @return \Imper86\AllegroApi\Soap\Wsdl\AlcoholDataStruct
     */
    public function setAlcoholExpirationDate($alcoholExpirationDate)
    {
      $this->alcoholExpirationDate = $alcoholExpirationDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getAlcoholShopName()
    {
      return $this->alcoholShopName;
    }

    /**
     * @param string $alcoholShopName
     * @return \Imper86\AllegroApi\Soap\Wsdl\AlcoholDataStruct
     */
    public function setAlcoholShopName($alcoholShopName)
    {
      $this->alcoholShopName = $alcoholShopName;
      return $this;
    }

    /**
     * @return string
     */
    public function getAlcoholShopAddress()
    {
      return $this->alcoholShopAddress;
    }

    /**
     * @param string $alcoholShopAddress
     * @return \Imper86\AllegroApi\Soap\Wsdl\AlcoholDataStruct
     */
    public function setAlcoholShopAddress($alcoholShopAddress)
    {
      $this->alcoholShopAddress = $alcoholShopAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getAlcoholShopPostcode()
    {
      return $this->alcoholShopPostcode;
    }

    /**
     * @param string $alcoholShopPostcode
     * @return \Imper86\AllegroApi\Soap\Wsdl\AlcoholDataStruct
     */
    public function setAlcoholShopPostcode($alcoholShopPostcode)
    {
      $this->alcoholShopPostcode = $alcoholShopPostcode;
      return $this;
    }

    /**
     * @return string
     */
    public function getAlcoholShopCity()
    {
      return $this->alcoholShopCity;
    }

    /**
     * @param string $alcoholShopCity
     * @return \Imper86\AllegroApi\Soap\Wsdl\AlcoholDataStruct
     */
    public function setAlcoholShopCity($alcoholShopCity)
    {
      $this->alcoholShopCity = $alcoholShopCity;
      return $this;
    }

    /**
     * @return string
     */
    public function getAlcoholShopCommune()
    {
      return $this->alcoholShopCommune;
    }

    /**
     * @param string $alcoholShopCommune
     * @return \Imper86\AllegroApi\Soap\Wsdl\AlcoholDataStruct
     */
    public function setAlcoholShopCommune($alcoholShopCommune)
    {
      $this->alcoholShopCommune = $alcoholShopCommune;
      return $this;
    }

    /**
     * @return int
     */
    public function getAlcoholShopCountryId()
    {
      return $this->alcoholShopCountryId;
    }

    /**
     * @param int $alcoholShopCountryId
     * @return \Imper86\AllegroApi\Soap\Wsdl\AlcoholDataStruct
     */
    public function setAlcoholShopCountryId($alcoholShopCountryId)
    {
      $this->alcoholShopCountryId = $alcoholShopCountryId;
      return $this;
    }

    /**
     * @return int
     */
    public function getAlcoholShopStateId()
    {
      return $this->alcoholShopStateId;
    }

    /**
     * @param int $alcoholShopStateId
     * @return \Imper86\AllegroApi\Soap\Wsdl\AlcoholDataStruct
     */
    public function setAlcoholShopStateId($alcoholShopStateId)
    {
      $this->alcoholShopStateId = $alcoholShopStateId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAlcoholPermitNumber()
    {
      return $this->alcoholPermitNumber;
    }

    /**
     * @param string $alcoholPermitNumber
     * @return \Imper86\AllegroApi\Soap\Wsdl\AlcoholDataStruct
     */
    public function setAlcoholPermitNumber($alcoholPermitNumber)
    {
      $this->alcoholPermitNumber = $alcoholPermitNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getAlcoholPermitAuthority()
    {
      return $this->alcoholPermitAuthority;
    }

    /**
     * @param string $alcoholPermitAuthority
     * @return \Imper86\AllegroApi\Soap\Wsdl\AlcoholDataStruct
     */
    public function setAlcoholPermitAuthority($alcoholPermitAuthority)
    {
      $this->alcoholPermitAuthority = $alcoholPermitAuthority;
      return $this;
    }

    /**
     * @return string
     */
    public function getAlcoholPermitInfo()
    {
      return $this->alcoholPermitInfo;
    }

    /**
     * @param string $alcoholPermitInfo
     * @return \Imper86\AllegroApi\Soap\Wsdl\AlcoholDataStruct
     */
    public function setAlcoholPermitInfo($alcoholPermitInfo)
    {
      $this->alcoholPermitInfo = $alcoholPermitInfo;
      return $this;
    }

}
