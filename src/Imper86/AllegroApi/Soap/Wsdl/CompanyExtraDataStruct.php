<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class CompanyExtraDataStruct
{

    /**
     * @var string $companyType
     */
    protected $companyType = null;

    /**
     * @var string $companyNip
     */
    protected $companyNip = null;

    /**
     * @var string $companyRegon
     */
    protected $companyRegon = null;

    /**
     * @var string $companyKrs
     */
    protected $companyKrs = null;

    /**
     * @var string $companyActivitySort
     */
    protected $companyActivitySort = null;

    /**
     * @param string $companyType
     * @param string $companyNip
     * @param string $companyRegon
     * @param string $companyKrs
     * @param string $companyActivitySort
     */
    public function __construct($companyType = null, $companyNip = null, $companyRegon = null, $companyKrs = null, $companyActivitySort = null)
    {
      $this->companyType = $companyType;
      $this->companyNip = $companyNip;
      $this->companyRegon = $companyRegon;
      $this->companyKrs = $companyKrs;
      $this->companyActivitySort = $companyActivitySort;
    }

    /**
     * @return string
     */
    public function getCompanyType()
    {
      return $this->companyType;
    }

    /**
     * @param string $companyType
     * @return \Imper86\AllegroApi\Soap\Wsdl\CompanyExtraDataStruct
     */
    public function setCompanyType($companyType)
    {
      $this->companyType = $companyType;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyNip()
    {
      return $this->companyNip;
    }

    /**
     * @param string $companyNip
     * @return \Imper86\AllegroApi\Soap\Wsdl\CompanyExtraDataStruct
     */
    public function setCompanyNip($companyNip)
    {
      $this->companyNip = $companyNip;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyRegon()
    {
      return $this->companyRegon;
    }

    /**
     * @param string $companyRegon
     * @return \Imper86\AllegroApi\Soap\Wsdl\CompanyExtraDataStruct
     */
    public function setCompanyRegon($companyRegon)
    {
      $this->companyRegon = $companyRegon;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyKrs()
    {
      return $this->companyKrs;
    }

    /**
     * @param string $companyKrs
     * @return \Imper86\AllegroApi\Soap\Wsdl\CompanyExtraDataStruct
     */
    public function setCompanyKrs($companyKrs)
    {
      $this->companyKrs = $companyKrs;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanyActivitySort()
    {
      return $this->companyActivitySort;
    }

    /**
     * @param string $companyActivitySort
     * @return \Imper86\AllegroApi\Soap\Wsdl\CompanyExtraDataStruct
     */
    public function setCompanyActivitySort($companyActivitySort)
    {
      $this->companyActivitySort = $companyActivitySort;
      return $this;
    }

}
