<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class DoGetMyIncomingPaymentsRequest
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
     * @var int $transRecvDateFrom
     */
    protected $transRecvDateFrom = null;

    /**
     * @var int $transRecvDateTo
     */
    protected $transRecvDateTo = null;

    /**
     * @var int $transPageLimit
     */
    protected $transPageLimit = null;

    /**
     * @var int $transOffset
     */
    protected $transOffset = null;

    /**
     * @var int $strictedSearch
     */
    protected $strictedSearch = null;

    /**
     * @param string $sessionHandle
     * @param int $buyerId
     * @param int $itemId
     * @param int $transRecvDateFrom
     * @param int $transRecvDateTo
     * @param int $transPageLimit
     * @param int $transOffset
     * @param int $strictedSearch
     */
    public function __construct($sessionHandle = null, $buyerId = null, $itemId = null, $transRecvDateFrom = null, $transRecvDateTo = null, $transPageLimit = null, $transOffset = null, $strictedSearch = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->buyerId = $buyerId;
      $this->itemId = $itemId;
      $this->transRecvDateFrom = $transRecvDateFrom;
      $this->transRecvDateTo = $transRecvDateTo;
      $this->transPageLimit = $transPageLimit;
      $this->transOffset = $transOffset;
      $this->strictedSearch = $strictedSearch;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetMyIncomingPaymentsRequest
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetMyIncomingPaymentsRequest
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetMyIncomingPaymentsRequest
     */
    public function setItemId($itemId)
    {
      $this->itemId = $itemId;
      return $this;
    }

    /**
     * @return int
     */
    public function getTransRecvDateFrom()
    {
      return $this->transRecvDateFrom;
    }

    /**
     * @param int $transRecvDateFrom
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetMyIncomingPaymentsRequest
     */
    public function setTransRecvDateFrom($transRecvDateFrom)
    {
      $this->transRecvDateFrom = $transRecvDateFrom;
      return $this;
    }

    /**
     * @return int
     */
    public function getTransRecvDateTo()
    {
      return $this->transRecvDateTo;
    }

    /**
     * @param int $transRecvDateTo
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetMyIncomingPaymentsRequest
     */
    public function setTransRecvDateTo($transRecvDateTo)
    {
      $this->transRecvDateTo = $transRecvDateTo;
      return $this;
    }

    /**
     * @return int
     */
    public function getTransPageLimit()
    {
      return $this->transPageLimit;
    }

    /**
     * @param int $transPageLimit
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetMyIncomingPaymentsRequest
     */
    public function setTransPageLimit($transPageLimit)
    {
      $this->transPageLimit = $transPageLimit;
      return $this;
    }

    /**
     * @return int
     */
    public function getTransOffset()
    {
      return $this->transOffset;
    }

    /**
     * @param int $transOffset
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetMyIncomingPaymentsRequest
     */
    public function setTransOffset($transOffset)
    {
      $this->transOffset = $transOffset;
      return $this;
    }

    /**
     * @return int
     */
    public function getStrictedSearch()
    {
      return $this->strictedSearch;
    }

    /**
     * @param int $strictedSearch
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetMyIncomingPaymentsRequest
     */
    public function setStrictedSearch($strictedSearch)
    {
      $this->strictedSearch = $strictedSearch;
      return $this;
    }

}
