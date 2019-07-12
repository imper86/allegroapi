<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class DoGetDealsRequest
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
     * @var int $buyerId
     */
    protected $buyerId = null;

    /**
     * @param string $sessionHandle
     * @param int $itemId
     * @param int $buyerId
     */
    public function __construct($sessionHandle = null, $itemId = null, $buyerId = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->itemId = $itemId;
      $this->buyerId = $buyerId;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetDealsRequest
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetDealsRequest
     */
    public function setItemId($itemId)
    {
      $this->itemId = $itemId;
      return $this;
    }

    /**
     * @return int
     */
    public function getBuyerId()
    {
      return $this->buyerId;
    }

    /**
     * @param int $buyerId
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetDealsRequest
     */
    public function setBuyerId($buyerId)
    {
      $this->buyerId = $buyerId;
      return $this;
    }

}
