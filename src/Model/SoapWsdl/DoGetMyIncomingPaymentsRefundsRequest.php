<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class DoGetMyIncomingPaymentsRefundsRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var int $buyerId
     */
    protected $buyerId = null;

    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var int $limit
     */
    protected $limit = null;

    /**
     * @var int $offset
     */
    protected $offset = null;

    /**
     * @param string $sessionHandle
     * @param int $buyerId
     * @param int $itemId
     * @param int $limit
     * @param int $offset
     */
    public function __construct($sessionHandle = null, $buyerId = null, $itemId = null, $limit = null, $offset = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->buyerId = $buyerId;
      $this->itemId = $itemId;
      $this->limit = $limit;
      $this->offset = $offset;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetMyIncomingPaymentsRefundsRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetMyIncomingPaymentsRefundsRequest
     */
    public function setBuyerId($buyerId)
    {
      $this->buyerId = $buyerId;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetMyIncomingPaymentsRefundsRequest
     */
    public function setItemId($itemId)
    {
      $this->itemId = $itemId;
      return $this;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
      return $this->limit;
    }

    /**
     * @param int $limit
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetMyIncomingPaymentsRefundsRequest
     */
    public function setLimit($limit)
    {
      $this->limit = $limit;
      return $this;
    }

    /**
     * @return int
     */
    public function getOffset()
    {
      return $this->offset;
    }

    /**
     * @param int $offset
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetMyIncomingPaymentsRefundsRequest
     */
    public function setOffset($offset)
    {
      $this->offset = $offset;
      return $this;
    }

}
