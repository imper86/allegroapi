<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class ItemTemplatesStruct
{

    /**
     * @var ArrayOfItemtemplateliststruct $itemTemplateList
     */
    protected $itemTemplateList = null;

    /**
     * @var ArrayOfInt $itemTemplateIncorrectIds
     */
    protected $itemTemplateIncorrectIds = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfItemtemplateliststruct
     */
    public function getItemTemplateList()
    {
      return $this->itemTemplateList;
    }

    /**
     * @param ArrayOfItemtemplateliststruct $itemTemplateList
     * @return \Imper86\AllegroApi\Soap\Wsdl\ItemTemplatesStruct
     */
    public function setItemTemplateList($itemTemplateList)
    {
      $this->itemTemplateList = $itemTemplateList;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getItemTemplateIncorrectIds()
    {
      return $this->itemTemplateIncorrectIds;
    }

    /**
     * @param ArrayOfInt $itemTemplateIncorrectIds
     * @return \Imper86\AllegroApi\Soap\Wsdl\ItemTemplatesStruct
     */
    public function setItemTemplateIncorrectIds($itemTemplateIncorrectIds)
    {
      $this->itemTemplateIncorrectIds = $itemTemplateIncorrectIds;
      return $this;
    }

}
