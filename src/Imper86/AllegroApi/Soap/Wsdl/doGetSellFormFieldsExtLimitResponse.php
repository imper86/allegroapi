<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class doGetSellFormFieldsExtLimitResponse
{

    /**
     * @var ArrayOfSellformtype $sellFormFields
     */
    protected $sellFormFields = null;

    /**
     * @var int $verKey
     */
    protected $verKey = null;

    /**
     * @var string $verStr
     */
    protected $verStr = null;

    /**
     * @var int $formFieldsCount
     */
    protected $formFieldsCount = null;

    /**
     * @param ArrayOfSellformtype $sellFormFields
     * @param int $verKey
     * @param string $verStr
     * @param int $formFieldsCount
     */
    public function __construct($sellFormFields = null, $verKey = null, $verStr = null, $formFieldsCount = null)
    {
      $this->sellFormFields = $sellFormFields;
      $this->verKey = $verKey;
      $this->verStr = $verStr;
      $this->formFieldsCount = $formFieldsCount;
    }

    /**
     * @return ArrayOfSellformtype
     */
    public function getSellFormFields()
    {
      return $this->sellFormFields;
    }

    /**
     * @param ArrayOfSellformtype $sellFormFields
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetSellFormFieldsExtLimitResponse
     */
    public function setSellFormFields($sellFormFields)
    {
      $this->sellFormFields = $sellFormFields;
      return $this;
    }

    /**
     * @return int
     */
    public function getVerKey()
    {
      return $this->verKey;
    }

    /**
     * @param int $verKey
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetSellFormFieldsExtLimitResponse
     */
    public function setVerKey($verKey)
    {
      $this->verKey = $verKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getVerStr()
    {
      return $this->verStr;
    }

    /**
     * @param string $verStr
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetSellFormFieldsExtLimitResponse
     */
    public function setVerStr($verStr)
    {
      $this->verStr = $verStr;
      return $this;
    }

    /**
     * @return int
     */
    public function getFormFieldsCount()
    {
      return $this->formFieldsCount;
    }

    /**
     * @param int $formFieldsCount
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetSellFormFieldsExtLimitResponse
     */
    public function setFormFieldsCount($formFieldsCount)
    {
      $this->formFieldsCount = $formFieldsCount;
      return $this;
    }

}
