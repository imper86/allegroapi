<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class DoShowItemInfoExtRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var int $getDesc
     */
    protected $getDesc = null;

    /**
     * @var int $getImageUrl
     */
    protected $getImageUrl = null;

    /**
     * @var int $getAttribs
     */
    protected $getAttribs = null;

    /**
     * @var int $getPostageOptions
     */
    protected $getPostageOptions = null;

    /**
     * @var int $getCompanyInfo
     */
    protected $getCompanyInfo = null;

    /**
     * @var int $getProductInfo
     */
    protected $getProductInfo = null;

    /**
     * @var int $getAfterSalesServiceConditions
     */
    protected $getAfterSalesServiceConditions = null;

    /**
     * @var int $getEan
     */
    protected $getEan = null;

    /**
     * @param string $sessionHandle
     * @param int $itemId
     * @param int $getDesc
     * @param int $getImageUrl
     * @param int $getAttribs
     * @param int $getPostageOptions
     * @param int $getCompanyInfo
     * @param int $getProductInfo
     * @param int $getAfterSalesServiceConditions
     * @param int $getEan
     */
    public function __construct($sessionHandle = null, $itemId = null, $getDesc = null, $getImageUrl = null, $getAttribs = null, $getPostageOptions = null, $getCompanyInfo = null, $getProductInfo = null, $getAfterSalesServiceConditions = null, $getEan = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->itemId = $itemId;
      $this->getDesc = $getDesc;
      $this->getImageUrl = $getImageUrl;
      $this->getAttribs = $getAttribs;
      $this->getPostageOptions = $getPostageOptions;
      $this->getCompanyInfo = $getCompanyInfo;
      $this->getProductInfo = $getProductInfo;
      $this->getAfterSalesServiceConditions = $getAfterSalesServiceConditions;
      $this->getEan = $getEan;
    }

    /**
     * @return string
     */
    public function getSessionHandle()
    {
      return $this->sessionHandle;
    }

    /**
     * @param string $sessionHandle
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoShowItemInfoExtRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemId()
    {
      return $this->itemId;
    }

    /**
     * @param int $itemId
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoShowItemInfoExtRequest
     */
    public function setItemId($itemId)
    {
      $this->itemId = $itemId;
      return $this;
    }

    /**
     * @return int
     */
    public function getGetDesc()
    {
      return $this->getDesc;
    }

    /**
     * @param int $getDesc
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoShowItemInfoExtRequest
     */
    public function setGetDesc($getDesc)
    {
      $this->getDesc = $getDesc;
      return $this;
    }

    /**
     * @return int
     */
    public function getGetImageUrl()
    {
      return $this->getImageUrl;
    }

    /**
     * @param int $getImageUrl
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoShowItemInfoExtRequest
     */
    public function setGetImageUrl($getImageUrl)
    {
      $this->getImageUrl = $getImageUrl;
      return $this;
    }

    /**
     * @return int
     */
    public function getGetAttribs()
    {
      return $this->getAttribs;
    }

    /**
     * @param int $getAttribs
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoShowItemInfoExtRequest
     */
    public function setGetAttribs($getAttribs)
    {
      $this->getAttribs = $getAttribs;
      return $this;
    }

    /**
     * @return int
     */
    public function getGetPostageOptions()
    {
      return $this->getPostageOptions;
    }

    /**
     * @param int $getPostageOptions
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoShowItemInfoExtRequest
     */
    public function setGetPostageOptions($getPostageOptions)
    {
      $this->getPostageOptions = $getPostageOptions;
      return $this;
    }

    /**
     * @return int
     */
    public function getGetCompanyInfo()
    {
      return $this->getCompanyInfo;
    }

    /**
     * @param int $getCompanyInfo
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoShowItemInfoExtRequest
     */
    public function setGetCompanyInfo($getCompanyInfo)
    {
      $this->getCompanyInfo = $getCompanyInfo;
      return $this;
    }

    /**
     * @return int
     */
    public function getGetProductInfo()
    {
      return $this->getProductInfo;
    }

    /**
     * @param int $getProductInfo
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoShowItemInfoExtRequest
     */
    public function setGetProductInfo($getProductInfo)
    {
      $this->getProductInfo = $getProductInfo;
      return $this;
    }

    /**
     * @return int
     */
    public function getGetAfterSalesServiceConditions()
    {
      return $this->getAfterSalesServiceConditions;
    }

    /**
     * @param int $getAfterSalesServiceConditions
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoShowItemInfoExtRequest
     */
    public function setGetAfterSalesServiceConditions($getAfterSalesServiceConditions)
    {
      $this->getAfterSalesServiceConditions = $getAfterSalesServiceConditions;
      return $this;
    }

    /**
     * @return int
     */
    public function getGetEan()
    {
      return $this->getEan;
    }

    /**
     * @param int $getEan
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoShowItemInfoExtRequest
     */
    public function setGetEan($getEan)
    {
      $this->getEan = $getEan;
      return $this;
    }

}
