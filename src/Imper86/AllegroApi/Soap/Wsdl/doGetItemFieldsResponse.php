<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class doGetItemFieldsResponse
{

    /**
     * @var ArrayOfFieldsvalue $itemFields
     */
    protected $itemFields = null;

    /**
     * @var AfterSalesServiceConditionsStruct $afterSalesServiceConditions
     */
    protected $afterSalesServiceConditions = null;

    /**
     * @param ArrayOfFieldsvalue $itemFields
     * @param AfterSalesServiceConditionsStruct $afterSalesServiceConditions
     */
    public function __construct($itemFields = null, $afterSalesServiceConditions = null)
    {
      $this->itemFields = $itemFields;
      $this->afterSalesServiceConditions = $afterSalesServiceConditions;
    }

    /**
     * @return ArrayOfFieldsvalue
     */
    public function getItemFields()
    {
      return $this->itemFields;
    }

    /**
     * @param ArrayOfFieldsvalue $itemFields
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetItemFieldsResponse
     */
    public function setItemFields($itemFields)
    {
      $this->itemFields = $itemFields;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetItemFieldsResponse
     */
    public function setAfterSalesServiceConditions($afterSalesServiceConditions)
    {
      $this->afterSalesServiceConditions = $afterSalesServiceConditions;
      return $this;
    }

}
