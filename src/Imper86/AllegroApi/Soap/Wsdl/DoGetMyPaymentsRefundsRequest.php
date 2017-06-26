<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class DoGetMyPaymentsRefundsRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var int $sellerId
     */
    protected $sellerId = null;

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
     * @param int $sellerId
     * @param int $itemId
     * @param int $limit
     * @param int $offset
     */
    public function __construct($sessionHandle = null, $sellerId = null, $itemId = null, $limit = null, $offset = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->sellerId = $sellerId;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetMyPaymentsRefundsRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
      return $this;
    }

    /**
     * @return int
     */
    public function getSellerId()
    {
      return $this->sellerId;
    }

    /**
     * @param int $sellerId
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetMyPaymentsRefundsRequest
     */
    public function setSellerId($sellerId)
    {
      $this->sellerId = $sellerId;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetMyPaymentsRefundsRequest
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetMyPaymentsRefundsRequest
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetMyPaymentsRefundsRequest
     */
    public function setOffset($offset)
    {
      $this->offset = $offset;
      return $this;
    }

}
