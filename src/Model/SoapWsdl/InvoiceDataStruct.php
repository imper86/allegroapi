<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class InvoiceDataStruct
{

    /**
     * @var string $companyName
     */
    protected $companyName = null;

    /**
     * @var string $companyNip
     */
    protected $companyNip = null;

    /**
     * @param string $companyName
     * @param string $companyNip
     */
    public function __construct($companyName = null, $companyNip = null)
    {
      $this->companyName = $companyName;
      $this->companyNip = $companyNip;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
      return $this->companyName;
    }

    /**
     * @param string $companyName
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\InvoiceDataStruct
     */
    public function setCompanyName($companyName)
    {
      $this->companyName = $companyName;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\InvoiceDataStruct
     */
    public function setCompanyNip($companyNip)
    {
      $this->companyNip = $companyNip;
      return $this;
    }

}
