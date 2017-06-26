<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class doCreateItemTemplateResponse
{

    /**
     * @var CreatedItemTemplateStruct $createdItemTemplate
     */
    protected $createdItemTemplate = null;

    /**
     * @param CreatedItemTemplateStruct $createdItemTemplate
     */
    public function __construct($createdItemTemplate = null)
    {
      $this->createdItemTemplate = $createdItemTemplate;
    }

    /**
     * @return CreatedItemTemplateStruct
     */
    public function getCreatedItemTemplate()
    {
      return $this->createdItemTemplate;
    }

    /**
     * @param CreatedItemTemplateStruct $createdItemTemplate
     * @return \Imper86\AllegroApi\Soap\Wsdl\doCreateItemTemplateResponse
     */
    public function setCreatedItemTemplate($createdItemTemplate)
    {
      $this->createdItemTemplate = $createdItemTemplate;
      return $this;
    }

}
