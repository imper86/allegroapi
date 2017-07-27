<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class DoRemoveItemTemplatesRequest
{

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var ArrayOfInt $itemTemplateIds
     */
    protected $itemTemplateIds = null;

    /**
     * @param string $sessionId
     * @param ArrayOfInt $itemTemplateIds
     */
    public function __construct($sessionId = null, $itemTemplateIds = null)
    {
      $this->sessionId = $sessionId;
      $this->itemTemplateIds = $itemTemplateIds;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoRemoveItemTemplatesRequest
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getItemTemplateIds()
    {
      return $this->itemTemplateIds;
    }

    /**
     * @param ArrayOfInt $itemTemplateIds
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoRemoveItemTemplatesRequest
     */
    public function setItemTemplateIds($itemTemplateIds)
    {
      $this->itemTemplateIds = $itemTemplateIds;
      return $this;
    }

}
