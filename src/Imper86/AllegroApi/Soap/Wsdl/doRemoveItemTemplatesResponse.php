<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class doRemoveItemTemplatesResponse
{

    /**
     * @var RemovedItemTemplatesStruct $removedItemTemplates
     */
    protected $removedItemTemplates = null;

    /**
     * @param RemovedItemTemplatesStruct $removedItemTemplates
     */
    public function __construct($removedItemTemplates = null)
    {
      $this->removedItemTemplates = $removedItemTemplates;
    }

    /**
     * @return RemovedItemTemplatesStruct
     */
    public function getRemovedItemTemplates()
    {
      return $this->removedItemTemplates;
    }

    /**
     * @param RemovedItemTemplatesStruct $removedItemTemplates
     * @return \Imper86\AllegroApi\Soap\Wsdl\doRemoveItemTemplatesResponse
     */
    public function setRemovedItemTemplates($removedItemTemplates)
    {
      $this->removedItemTemplates = $removedItemTemplates;
      return $this;
    }

}
