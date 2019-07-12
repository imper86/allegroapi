<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class DoGetBidItem2Request
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
     * @param string $sessionHandle
     * @param int $itemId
     */
    public function __construct($sessionHandle = null, $itemId = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->itemId = $itemId;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetBidItem2Request
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetBidItem2Request
     */
    public function setItemId($itemId)
    {
      $this->itemId = $itemId;
      return $this;
    }

}
