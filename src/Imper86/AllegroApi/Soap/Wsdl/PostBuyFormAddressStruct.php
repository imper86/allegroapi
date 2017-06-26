<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class PostBuyFormAddressStruct
{

    /**
     * @var int $postBuyFormAdrCountry
     */
    protected $postBuyFormAdrCountry = null;

    /**
     * @var string $postBuyFormAdrStreet
     */
    protected $postBuyFormAdrStreet = null;

    /**
     * @var string $postBuyFormAdrPostcode
     */
    protected $postBuyFormAdrPostcode = null;

    /**
     * @var string $postBuyFormAdrCity
     */
    protected $postBuyFormAdrCity = null;

    /**
     * @var string $postBuyFormAdrFullName
     */
    protected $postBuyFormAdrFullName = null;

    /**
     * @var string $postBuyFormAdrCompany
     */
    protected $postBuyFormAdrCompany = null;

    /**
     * @var string $postBuyFormAdrPhone
     */
    protected $postBuyFormAdrPhone = null;

    /**
     * @var string $postBuyFormAdrNip
     */
    protected $postBuyFormAdrNip = null;

    /**
     * @var string $postBuyFormCreatedDate
     */
    protected $postBuyFormCreatedDate = null;

    /**
     * @var int $postBuyFormAdrType
     */
    protected $postBuyFormAdrType = null;

    /**
     * @param int $postBuyFormAdrCountry
     * @param string $postBuyFormAdrStreet
     * @param string $postBuyFormAdrPostcode
     * @param string $postBuyFormAdrCity
     * @param string $postBuyFormAdrFullName
     * @param string $postBuyFormAdrCompany
     * @param string $postBuyFormAdrPhone
     * @param string $postBuyFormAdrNip
     * @param string $postBuyFormCreatedDate
     * @param int $postBuyFormAdrType
     */
    public function __construct($postBuyFormAdrCountry = null, $postBuyFormAdrStreet = null, $postBuyFormAdrPostcode = null, $postBuyFormAdrCity = null, $postBuyFormAdrFullName = null, $postBuyFormAdrCompany = null, $postBuyFormAdrPhone = null, $postBuyFormAdrNip = null, $postBuyFormCreatedDate = null, $postBuyFormAdrType = null)
    {
      $this->postBuyFormAdrCountry = $postBuyFormAdrCountry;
      $this->postBuyFormAdrStreet = $postBuyFormAdrStreet;
      $this->postBuyFormAdrPostcode = $postBuyFormAdrPostcode;
      $this->postBuyFormAdrCity = $postBuyFormAdrCity;
      $this->postBuyFormAdrFullName = $postBuyFormAdrFullName;
      $this->postBuyFormAdrCompany = $postBuyFormAdrCompany;
      $this->postBuyFormAdrPhone = $postBuyFormAdrPhone;
      $this->postBuyFormAdrNip = $postBuyFormAdrNip;
      $this->postBuyFormCreatedDate = $postBuyFormCreatedDate;
      $this->postBuyFormAdrType = $postBuyFormAdrType;
    }

    /**
     * @return int
     */
    public function getPostBuyFormAdrCountry()
    {
      return $this->postBuyFormAdrCountry;
    }

    /**
     * @param int $postBuyFormAdrCountry
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormAddressStruct
     */
    public function setPostBuyFormAdrCountry($postBuyFormAdrCountry)
    {
      $this->postBuyFormAdrCountry = $postBuyFormAdrCountry;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormAdrStreet()
    {
      return $this->postBuyFormAdrStreet;
    }

    /**
     * @param string $postBuyFormAdrStreet
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormAddressStruct
     */
    public function setPostBuyFormAdrStreet($postBuyFormAdrStreet)
    {
      $this->postBuyFormAdrStreet = $postBuyFormAdrStreet;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormAdrPostcode()
    {
      return $this->postBuyFormAdrPostcode;
    }

    /**
     * @param string $postBuyFormAdrPostcode
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormAddressStruct
     */
    public function setPostBuyFormAdrPostcode($postBuyFormAdrPostcode)
    {
      $this->postBuyFormAdrPostcode = $postBuyFormAdrPostcode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormAdrCity()
    {
      return $this->postBuyFormAdrCity;
    }

    /**
     * @param string $postBuyFormAdrCity
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormAddressStruct
     */
    public function setPostBuyFormAdrCity($postBuyFormAdrCity)
    {
      $this->postBuyFormAdrCity = $postBuyFormAdrCity;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormAdrFullName()
    {
      return $this->postBuyFormAdrFullName;
    }

    /**
     * @param string $postBuyFormAdrFullName
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormAddressStruct
     */
    public function setPostBuyFormAdrFullName($postBuyFormAdrFullName)
    {
      $this->postBuyFormAdrFullName = $postBuyFormAdrFullName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormAdrCompany()
    {
      return $this->postBuyFormAdrCompany;
    }

    /**
     * @param string $postBuyFormAdrCompany
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormAddressStruct
     */
    public function setPostBuyFormAdrCompany($postBuyFormAdrCompany)
    {
      $this->postBuyFormAdrCompany = $postBuyFormAdrCompany;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormAdrPhone()
    {
      return $this->postBuyFormAdrPhone;
    }

    /**
     * @param string $postBuyFormAdrPhone
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormAddressStruct
     */
    public function setPostBuyFormAdrPhone($postBuyFormAdrPhone)
    {
      $this->postBuyFormAdrPhone = $postBuyFormAdrPhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormAdrNip()
    {
      return $this->postBuyFormAdrNip;
    }

    /**
     * @param string $postBuyFormAdrNip
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormAddressStruct
     */
    public function setPostBuyFormAdrNip($postBuyFormAdrNip)
    {
      $this->postBuyFormAdrNip = $postBuyFormAdrNip;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormCreatedDate()
    {
      return $this->postBuyFormCreatedDate;
    }

    /**
     * @param string $postBuyFormCreatedDate
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormAddressStruct
     */
    public function setPostBuyFormCreatedDate($postBuyFormCreatedDate)
    {
      $this->postBuyFormCreatedDate = $postBuyFormCreatedDate;
      return $this;
    }

    /**
     * @return int
     */
    public function getPostBuyFormAdrType()
    {
      return $this->postBuyFormAdrType;
    }

    /**
     * @param int $postBuyFormAdrType
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormAddressStruct
     */
    public function setPostBuyFormAdrType($postBuyFormAdrType)
    {
      $this->postBuyFormAdrType = $postBuyFormAdrType;
      return $this;
    }

}
