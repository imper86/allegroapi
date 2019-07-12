<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class ChangedItemStruct
{

    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var ArrayOfFieldsvalue $itemFields
     */
    protected $itemFields = null;

    /**
     * @var ArrayOfItemsurchargestruct $itemSurcharge
     */
    protected $itemSurcharge = null;

    /**
     * @param int $itemId
     */
    public function __construct($itemId = null)
    {
      $this->itemId = $itemId;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\ChangedItemStruct
     */
    public function setItemId($itemId)
    {
      $this->itemId = $itemId;
      return $this;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\ChangedItemStruct
     */
    public function setItemFields($itemFields)
    {
      $this->itemFields = $itemFields;
      return $this;
    }

    /**
     * @return ArrayOfItemsurchargestruct
     */
    public function getItemSurcharge()
    {
      return $this->itemSurcharge;
    }

    /**
     * @param ArrayOfItemsurchargestruct $itemSurcharge
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\ChangedItemStruct
     */
    public function setItemSurcharge($itemSurcharge)
    {
      $this->itemSurcharge = $itemSurcharge;
      return $this;
    }

}
