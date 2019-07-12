<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class doCheckItemDescriptionResponse
{

    /**
     * @var ItemDescriptionStruct $itemDescription
     */
    protected $itemDescription = null;

    /**
     * @param ItemDescriptionStruct $itemDescription
     */
    public function __construct($itemDescription = null)
    {
      $this->itemDescription = $itemDescription;
    }

    /**
     * @return ItemDescriptionStruct
     */
    public function getItemDescription()
    {
      return $this->itemDescription;
    }

    /**
     * @param ItemDescriptionStruct $itemDescription
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doCheckItemDescriptionResponse
     */
    public function setItemDescription($itemDescription)
    {
      $this->itemDescription = $itemDescription;
      return $this;
    }

}
