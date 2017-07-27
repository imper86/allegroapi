<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class ProductParametersGroupStruct
{

    /**
     * @var string $productParametersGroupName
     */
    protected $productParametersGroupName = null;

    /**
     * @var ArrayOfProductparametersstruct $productParametersList
     */
    protected $productParametersList = null;

    /**
     * @param string $productParametersGroupName
     */
    public function __construct($productParametersGroupName = null)
    {
      $this->productParametersGroupName = $productParametersGroupName;
    }

    /**
     * @return string
     */
    public function getProductParametersGroupName()
    {
      return $this->productParametersGroupName;
    }

    /**
     * @param string $productParametersGroupName
     * @return \Imper86\AllegroApi\Soap\Wsdl\ProductParametersGroupStruct
     */
    public function setProductParametersGroupName($productParametersGroupName)
    {
      $this->productParametersGroupName = $productParametersGroupName;
      return $this;
    }

    /**
     * @return ArrayOfProductparametersstruct
     */
    public function getProductParametersList()
    {
      return $this->productParametersList;
    }

    /**
     * @param ArrayOfProductparametersstruct $productParametersList
     * @return \Imper86\AllegroApi\Soap\Wsdl\ProductParametersGroupStruct
     */
    public function setProductParametersList($productParametersList)
    {
      $this->productParametersList = $productParametersList;
      return $this;
    }

}
