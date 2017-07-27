<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class doGetSellFormFieldsForCategoryResponse
{

    /**
     * @var SellFormFieldsForCategoryStruct $sellFormFieldsForCategory
     */
    protected $sellFormFieldsForCategory = null;

    /**
     * @param SellFormFieldsForCategoryStruct $sellFormFieldsForCategory
     */
    public function __construct($sellFormFieldsForCategory = null)
    {
      $this->sellFormFieldsForCategory = $sellFormFieldsForCategory;
    }

    /**
     * @return SellFormFieldsForCategoryStruct
     */
    public function getSellFormFieldsForCategory()
    {
      return $this->sellFormFieldsForCategory;
    }

    /**
     * @param SellFormFieldsForCategoryStruct $sellFormFieldsForCategory
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetSellFormFieldsForCategoryResponse
     */
    public function setSellFormFieldsForCategory($sellFormFieldsForCategory)
    {
      $this->sellFormFieldsForCategory = $sellFormFieldsForCategory;
      return $this;
    }

}
