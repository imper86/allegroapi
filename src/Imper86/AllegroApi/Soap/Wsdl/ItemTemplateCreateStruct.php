<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class ItemTemplateCreateStruct
{

    /**
     * @var int $itemTemplateOption
     */
    protected $itemTemplateOption = null;

    /**
     * @var string $itemTemplateName
     */
    protected $itemTemplateName = null;

    /**
     * @param int $itemTemplateOption
     * @param string $itemTemplateName
     */
    public function __construct($itemTemplateOption = null, $itemTemplateName = null)
    {
      $this->itemTemplateOption = $itemTemplateOption;
      $this->itemTemplateName = $itemTemplateName;
    }

    /**
     * @return int
     */
    public function getItemTemplateOption()
    {
      return $this->itemTemplateOption;
    }

    /**
     * @param int $itemTemplateOption
     * @return \Imper86\AllegroApi\Soap\Wsdl\ItemTemplateCreateStruct
     */
    public function setItemTemplateOption($itemTemplateOption)
    {
      $this->itemTemplateOption = $itemTemplateOption;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemTemplateName()
    {
      return $this->itemTemplateName;
    }

    /**
     * @param string $itemTemplateName
     * @return \Imper86\AllegroApi\Soap\Wsdl\ItemTemplateCreateStruct
     */
    public function setItemTemplateName($itemTemplateName)
    {
      $this->itemTemplateName = $itemTemplateName;
      return $this;
    }

}
