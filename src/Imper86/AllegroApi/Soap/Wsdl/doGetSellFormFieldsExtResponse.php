<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class doGetSellFormFieldsExtResponse
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
     * @param ArrayOfSellformtype $sellFormFields
     * @param int $verKey
     * @param string $verStr
     */
    public function __construct($sellFormFields = null, $verKey = null, $verStr = null)
    {
      $this->sellFormFields = $sellFormFields;
      $this->verKey = $verKey;
      $this->verStr = $verStr;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetSellFormFieldsExtResponse
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetSellFormFieldsExtResponse
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetSellFormFieldsExtResponse
     */
    public function setVerStr($verStr)
    {
      $this->verStr = $verStr;
      return $this;
    }

}
