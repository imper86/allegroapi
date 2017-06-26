<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class DoCreateItemTemplateRequest
{

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var string $itemTemplateName
     */
    protected $itemTemplateName = null;

    /**
     * @var ArrayOfFieldsvalue $itemTemplateFields
     */
    protected $itemTemplateFields = null;

    /**
     * @param string $sessionId
     * @param string $itemTemplateName
     * @param ArrayOfFieldsvalue $itemTemplateFields
     */
    public function __construct($sessionId = null, $itemTemplateName = null, $itemTemplateFields = null)
    {
      $this->sessionId = $sessionId;
      $this->itemTemplateName = $itemTemplateName;
      $this->itemTemplateFields = $itemTemplateFields;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
      return $this->sessionId;
    }

    /**
     * @param string $sessionId
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoCreateItemTemplateRequest
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoCreateItemTemplateRequest
     */
    public function setItemTemplateName($itemTemplateName)
    {
      $this->itemTemplateName = $itemTemplateName;
      return $this;
    }

    /**
     * @return ArrayOfFieldsvalue
     */
    public function getItemTemplateFields()
    {
      return $this->itemTemplateFields;
    }

    /**
     * @param ArrayOfFieldsvalue $itemTemplateFields
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoCreateItemTemplateRequest
     */
    public function setItemTemplateFields($itemTemplateFields)
    {
      $this->itemTemplateFields = $itemTemplateFields;
      return $this;
    }

}
