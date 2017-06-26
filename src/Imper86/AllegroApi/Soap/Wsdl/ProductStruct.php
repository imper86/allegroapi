<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class ProductStruct
{

    /**
     * @var int $productId
     */
    protected $productId = null;

    /**
     * @var string $productName
     */
    protected $productName = null;

    /**
     * @var string $productDescription
     */
    protected $productDescription = null;

    /**
     * @var ArrayOfString $productImagesList
     */
    protected $productImagesList = null;

    /**
     * @var ArrayOfProductparametersgroupstruct $productParametersGroupList
     */
    protected $productParametersGroupList = null;

    /**
     * @param int $productId
     * @param string $productName
     * @param string $productDescription
     */
    public function __construct($productId = null, $productName = null, $productDescription = null)
    {
      $this->productId = $productId;
      $this->productName = $productName;
      $this->productDescription = $productDescription;
    }

    /**
     * @return int
     */
    public function getProductId()
    {
      return $this->productId;
    }

    /**
     * @param int $productId
     * @return \Imper86\AllegroApi\Soap\Wsdl\ProductStruct
     */
    public function setProductId($productId)
    {
      $this->productId = $productId;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductName()
    {
      return $this->productName;
    }

    /**
     * @param string $productName
     * @return \Imper86\AllegroApi\Soap\Wsdl\ProductStruct
     */
    public function setProductName($productName)
    {
      $this->productName = $productName;
      return $this;
    }

    /**
     * @return string
     */
    public function getProductDescription()
    {
      return $this->productDescription;
    }

    /**
     * @param string $productDescription
     * @return \Imper86\AllegroApi\Soap\Wsdl\ProductStruct
     */
    public function setProductDescription($productDescription)
    {
      $this->productDescription = $productDescription;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getProductImagesList()
    {
      return $this->productImagesList;
    }

    /**
     * @param ArrayOfString $productImagesList
     * @return \Imper86\AllegroApi\Soap\Wsdl\ProductStruct
     */
    public function setProductImagesList($productImagesList)
    {
      $this->productImagesList = $productImagesList;
      return $this;
    }

    /**
     * @return ArrayOfProductparametersgroupstruct
     */
    public function getProductParametersGroupList()
    {
      return $this->productParametersGroupList;
    }

    /**
     * @param ArrayOfProductparametersgroupstruct $productParametersGroupList
     * @return \Imper86\AllegroApi\Soap\Wsdl\ProductStruct
     */
    public function setProductParametersGroupList($productParametersGroupList)
    {
      $this->productParametersGroupList = $productParametersGroupList;
      return $this;
    }

}
