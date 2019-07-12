<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class DoMyBillingItemRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var string $option
     */
    protected $option = null;

    /**
     * @param string $sessionHandle
     * @param int $itemId
     * @param string $option
     */
    public function __construct($sessionHandle = null, $itemId = null, $option = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->itemId = $itemId;
      $this->option = $option;
    }

    /**
     * @return string
     */
    public function getSessionHandle()
    {
      return $this->sessionHandle;
    }

    /**
     * @param string $sessionHandle
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoMyBillingItemRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
      return $this;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoMyBillingItemRequest
     */
    public function setItemId($itemId)
    {
      $this->itemId = $itemId;
      return $this;
    }

    /**
     * @return string
     */
    public function getOption()
    {
      return $this->option;
    }

    /**
     * @param string $option
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoMyBillingItemRequest
     */
    public function setOption($option)
    {
      $this->option = $option;
      return $this;
    }

}
