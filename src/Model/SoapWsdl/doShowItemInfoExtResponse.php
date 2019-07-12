<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class doShowItemInfoExtResponse
{

    /**
     * @var ItemInfoExt $itemListInfoExt
     */
    protected $itemListInfoExt = null;

    /**
     * @var ArrayOfItemcatlist $itemCatPath
     */
    protected $itemCatPath = null;

    /**
     * @var ArrayOfItemimagelist $itemImgList
     */
    protected $itemImgList = null;

    /**
     * @var ArrayOfAttribstruct $itemAttribList
     */
    protected $itemAttribList = null;

    /**
     * @var ArrayOfPostagestruct $itemPostageOptions
     */
    protected $itemPostageOptions = null;

    /**
     * @var ItemPaymentOptions $itemPaymentOptions
     */
    protected $itemPaymentOptions = null;

    /**
     * @var CompanyInfoStruct $itemCompanyInfo
     */
    protected $itemCompanyInfo = null;

    /**
     * @var ProductStruct $itemProductInfo
     */
    protected $itemProductInfo = null;

    /**
     * @var string $itemVariants
     */
    protected $itemVariants = null;

    /**
     * @var AfterSalesServiceConditionsStruct $itemAfterSalesServiceConditions
     */
    protected $itemAfterSalesServiceConditions = null;

    /**
     * @var string $itemAdditionalServicesGroup
     */
    protected $itemAdditionalServicesGroup = null;

    /**
     * @param ItemInfoExt $itemListInfoExt
     * @param ArrayOfItemcatlist $itemCatPath
     * @param ArrayOfItemimagelist $itemImgList
     * @param ArrayOfAttribstruct $itemAttribList
     * @param ArrayOfPostagestruct $itemPostageOptions
     * @param ItemPaymentOptions $itemPaymentOptions
     * @param CompanyInfoStruct $itemCompanyInfo
     * @param ProductStruct $itemProductInfo
     * @param string $itemVariants
     * @param AfterSalesServiceConditionsStruct $itemAfterSalesServiceConditions
     * @param string $itemAdditionalServicesGroup
     */
    public function __construct($itemListInfoExt = null, $itemCatPath = null, $itemImgList = null, $itemAttribList = null, $itemPostageOptions = null, $itemPaymentOptions = null, $itemCompanyInfo = null, $itemProductInfo = null, $itemVariants = null, $itemAfterSalesServiceConditions = null, $itemAdditionalServicesGroup = null)
    {
      $this->itemListInfoExt = $itemListInfoExt;
      $this->itemCatPath = $itemCatPath;
      $this->itemImgList = $itemImgList;
      $this->itemAttribList = $itemAttribList;
      $this->itemPostageOptions = $itemPostageOptions;
      $this->itemPaymentOptions = $itemPaymentOptions;
      $this->itemCompanyInfo = $itemCompanyInfo;
      $this->itemProductInfo = $itemProductInfo;
      $this->itemVariants = $itemVariants;
      $this->itemAfterSalesServiceConditions = $itemAfterSalesServiceConditions;
      $this->itemAdditionalServicesGroup = $itemAdditionalServicesGroup;
    }

    /**
     * @return ItemInfoExt
     */
    public function getItemListInfoExt()
    {
      return $this->itemListInfoExt;
    }

    /**
     * @param ItemInfoExt $itemListInfoExt
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doShowItemInfoExtResponse
     */
    public function setItemListInfoExt($itemListInfoExt)
    {
      $this->itemListInfoExt = $itemListInfoExt;
      return $this;
    }

    /**
     * @return ArrayOfItemcatlist
     */
    public function getItemCatPath()
    {
      return $this->itemCatPath;
    }

    /**
     * @param ArrayOfItemcatlist $itemCatPath
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doShowItemInfoExtResponse
     */
    public function setItemCatPath($itemCatPath)
    {
      $this->itemCatPath = $itemCatPath;
      return $this;
    }

    /**
     * @return ArrayOfItemimagelist
     */
    public function getItemImgList()
    {
      return $this->itemImgList;
    }

    /**
     * @param ArrayOfItemimagelist $itemImgList
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doShowItemInfoExtResponse
     */
    public function setItemImgList($itemImgList)
    {
      $this->itemImgList = $itemImgList;
      return $this;
    }

    /**
     * @return ArrayOfAttribstruct
     */
    public function getItemAttribList()
    {
      return $this->itemAttribList;
    }

    /**
     * @param ArrayOfAttribstruct $itemAttribList
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doShowItemInfoExtResponse
     */
    public function setItemAttribList($itemAttribList)
    {
      $this->itemAttribList = $itemAttribList;
      return $this;
    }

    /**
     * @return ArrayOfPostagestruct
     */
    public function getItemPostageOptions()
    {
      return $this->itemPostageOptions;
    }

    /**
     * @param ArrayOfPostagestruct $itemPostageOptions
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doShowItemInfoExtResponse
     */
    public function setItemPostageOptions($itemPostageOptions)
    {
      $this->itemPostageOptions = $itemPostageOptions;
      return $this;
    }

    /**
     * @return ItemPaymentOptions
     */
    public function getItemPaymentOptions()
    {
      return $this->itemPaymentOptions;
    }

    /**
     * @param ItemPaymentOptions $itemPaymentOptions
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doShowItemInfoExtResponse
     */
    public function setItemPaymentOptions($itemPaymentOptions)
    {
      $this->itemPaymentOptions = $itemPaymentOptions;
      return $this;
    }

    /**
     * @return CompanyInfoStruct
     */
    public function getItemCompanyInfo()
    {
      return $this->itemCompanyInfo;
    }

    /**
     * @param CompanyInfoStruct $itemCompanyInfo
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doShowItemInfoExtResponse
     */
    public function setItemCompanyInfo($itemCompanyInfo)
    {
      $this->itemCompanyInfo = $itemCompanyInfo;
      return $this;
    }

    /**
     * @return ProductStruct
     */
    public function getItemProductInfo()
    {
      return $this->itemProductInfo;
    }

    /**
     * @param ProductStruct $itemProductInfo
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doShowItemInfoExtResponse
     */
    public function setItemProductInfo($itemProductInfo)
    {
      $this->itemProductInfo = $itemProductInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemVariants()
    {
      return $this->itemVariants;
    }

    /**
     * @param string $itemVariants
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doShowItemInfoExtResponse
     */
    public function setItemVariants($itemVariants)
    {
      $this->itemVariants = $itemVariants;
      return $this;
    }

    /**
     * @return AfterSalesServiceConditionsStruct
     */
    public function getItemAfterSalesServiceConditions()
    {
      return $this->itemAfterSalesServiceConditions;
    }

    /**
     * @param AfterSalesServiceConditionsStruct $itemAfterSalesServiceConditions
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doShowItemInfoExtResponse
     */
    public function setItemAfterSalesServiceConditions($itemAfterSalesServiceConditions)
    {
      $this->itemAfterSalesServiceConditions = $itemAfterSalesServiceConditions;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemAdditionalServicesGroup()
    {
      return $this->itemAdditionalServicesGroup;
    }

    /**
     * @param string $itemAdditionalServicesGroup
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doShowItemInfoExtResponse
     */
    public function setItemAdditionalServicesGroup($itemAdditionalServicesGroup)
    {
      $this->itemAdditionalServicesGroup = $itemAdditionalServicesGroup;
      return $this;
    }

}
