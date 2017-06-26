<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class DoCheckNewAuctionExtRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var ArrayOfFieldsvalue $fields
     */
    protected $fields = null;

    /**
     * @var ArrayOfVariantstruct $variants
     */
    protected $variants = null;

    /**
     * @var ArrayOfTagnamestruct $tags
     */
    protected $tags = null;

    /**
     * @var AfterSalesServiceConditionsStruct $afterSalesServiceConditions
     */
    protected $afterSalesServiceConditions = null;

    /**
     * @param string $sessionHandle
     * @param ArrayOfFieldsvalue $fields
     * @param ArrayOfVariantstruct $variants
     * @param ArrayOfTagnamestruct $tags
     * @param AfterSalesServiceConditionsStruct $afterSalesServiceConditions
     */
    public function __construct($sessionHandle = null, $fields = null, $variants = null, $tags = null, $afterSalesServiceConditions = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->fields = $fields;
      $this->variants = $variants;
      $this->tags = $tags;
      $this->afterSalesServiceConditions = $afterSalesServiceConditions;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoCheckNewAuctionExtRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
      return $this;
    }

    /**
     * @return ArrayOfFieldsvalue
     */
    public function getFields()
    {
      return $this->fields;
    }

    /**
     * @param ArrayOfFieldsvalue $fields
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoCheckNewAuctionExtRequest
     */
    public function setFields($fields)
    {
      $this->fields = $fields;
      return $this;
    }

    /**
     * @return ArrayOfVariantstruct
     */
    public function getVariants()
    {
      return $this->variants;
    }

    /**
     * @param ArrayOfVariantstruct $variants
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoCheckNewAuctionExtRequest
     */
    public function setVariants($variants)
    {
      $this->variants = $variants;
      return $this;
    }

    /**
     * @return ArrayOfTagnamestruct
     */
    public function getTags()
    {
      return $this->tags;
    }

    /**
     * @param ArrayOfTagnamestruct $tags
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoCheckNewAuctionExtRequest
     */
    public function setTags($tags)
    {
      $this->tags = $tags;
      return $this;
    }

    /**
     * @return AfterSalesServiceConditionsStruct
     */
    public function getAfterSalesServiceConditions()
    {
      return $this->afterSalesServiceConditions;
    }

    /**
     * @param AfterSalesServiceConditionsStruct $afterSalesServiceConditions
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoCheckNewAuctionExtRequest
     */
    public function setAfterSalesServiceConditions($afterSalesServiceConditions)
    {
      $this->afterSalesServiceConditions = $afterSalesServiceConditions;
      return $this;
    }

}
