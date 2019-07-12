<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class doGetMyDataResponse
{

    /**
     * @var UserDataStruct $userData
     */
    protected $userData = null;

    /**
     * @var InvoiceDataStruct $invoiceData
     */
    protected $invoiceData = null;

    /**
     * @var CompanyExtraDataStruct $companyExtraData
     */
    protected $companyExtraData = null;

    /**
     * @var CompanySecondAddressStruct $companySecondAddress
     */
    protected $companySecondAddress = null;

    /**
     * @var PharmacyDataStruct $pharmacyData
     */
    protected $pharmacyData = null;

    /**
     * @var AlcoholDataStruct $alcoholData
     */
    protected $alcoholData = null;

    /**
     * @var RelatedPersonsStruct $relatedPersons
     */
    protected $relatedPersons = null;

    /**
     * @param UserDataStruct $userData
     * @param InvoiceDataStruct $invoiceData
     * @param CompanyExtraDataStruct $companyExtraData
     * @param CompanySecondAddressStruct $companySecondAddress
     * @param PharmacyDataStruct $pharmacyData
     * @param AlcoholDataStruct $alcoholData
     * @param RelatedPersonsStruct $relatedPersons
     */
    public function __construct($userData = null, $invoiceData = null, $companyExtraData = null, $companySecondAddress = null, $pharmacyData = null, $alcoholData = null, $relatedPersons = null)
    {
      $this->userData = $userData;
      $this->invoiceData = $invoiceData;
      $this->companyExtraData = $companyExtraData;
      $this->companySecondAddress = $companySecondAddress;
      $this->pharmacyData = $pharmacyData;
      $this->alcoholData = $alcoholData;
      $this->relatedPersons = $relatedPersons;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetMyDataResponse
     */
    public function setUserData($userData)
    {
      $this->userData = $userData;
      return $this;
    }

    /**
     * @return InvoiceDataStruct
     */
    public function getInvoiceData()
    {
      return $this->invoiceData;
    }

    /**
     * @param InvoiceDataStruct $invoiceData
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetMyDataResponse
     */
    public function setInvoiceData($invoiceData)
    {
      $this->invoiceData = $invoiceData;
      return $this;
    }

    /**
     * @return CompanyExtraDataStruct
     */
    public function getCompanyExtraData()
    {
      return $this->companyExtraData;
    }

    /**
     * @param CompanyExtraDataStruct $companyExtraData
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetMyDataResponse
     */
    public function setCompanyExtraData($companyExtraData)
    {
      $this->companyExtraData = $companyExtraData;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetMyDataResponse
     */
    public function setCompanySecondAddress($companySecondAddress)
    {
      $this->companySecondAddress = $companySecondAddress;
      return $this;
    }

    /**
     * @return PharmacyDataStruct
     */
    public function getPharmacyData()
    {
      return $this->pharmacyData;
    }

    /**
     * @param PharmacyDataStruct $pharmacyData
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetMyDataResponse
     */
    public function setPharmacyData($pharmacyData)
    {
      $this->pharmacyData = $pharmacyData;
      return $this;
    }

    /**
     * @return AlcoholDataStruct
     */
    public function getAlcoholData()
    {
      return $this->alcoholData;
    }

    /**
     * @param AlcoholDataStruct $alcoholData
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetMyDataResponse
     */
    public function setAlcoholData($alcoholData)
    {
      $this->alcoholData = $alcoholData;
      return $this;
    }

    /**
     * @return RelatedPersonsStruct
     */
    public function getRelatedPersons()
    {
      return $this->relatedPersons;
    }

    /**
     * @param RelatedPersonsStruct $relatedPersons
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetMyDataResponse
     */
    public function setRelatedPersons($relatedPersons)
    {
      $this->relatedPersons = $relatedPersons;
      return $this;
    }

}
