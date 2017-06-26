<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class DoGetItemsInfoRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var ArrayOfLong $itemsIdArray
     */
    protected $itemsIdArray = null;

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
     * @param string $sessionHandle
     * @param ArrayOfLong $itemsIdArray
     * @param int $getDesc
     * @param int $getImageUrl
     * @param int $getAttribs
     * @param int $getPostageOptions
     * @param int $getCompanyInfo
     * @param int $getProductInfo
     * @param int $getAfterSalesServiceConditions
     */
    public function __construct($sessionHandle = null, $itemsIdArray = null, $getDesc = null, $getImageUrl = null, $getAttribs = null, $getPostageOptions = null, $getCompanyInfo = null, $getProductInfo = null, $getAfterSalesServiceConditions = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->itemsIdArray = $itemsIdArray;
      $this->getDesc = $getDesc;
      $this->getImageUrl = $getImageUrl;
      $this->getAttribs = $getAttribs;
      $this->getPostageOptions = $getPostageOptions;
      $this->getCompanyInfo = $getCompanyInfo;
      $this->getProductInfo = $getProductInfo;
      $this->getAfterSalesServiceConditions = $getAfterSalesServiceConditions;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetItemsInfoRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getItemsIdArray()
    {
      return $this->itemsIdArray;
    }

    /**
     * @param ArrayOfLong $itemsIdArray
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetItemsInfoRequest
     */
    public function setItemsIdArray($itemsIdArray)
    {
      $this->itemsIdArray = $itemsIdArray;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetItemsInfoRequest
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetItemsInfoRequest
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetItemsInfoRequest
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetItemsInfoRequest
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetItemsInfoRequest
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetItemsInfoRequest
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetItemsInfoRequest
     */
    public function setGetAfterSalesServiceConditions($getAfterSalesServiceConditions)
    {
      $this->getAfterSalesServiceConditions = $getAfterSalesServiceConditions;
      return $this;
    }

}
