<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class DoGetMyPaymentsRequest
{

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var int $sellerId
     */
    protected $sellerId = null;

    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var int $paymentTimeFrom
     */
    protected $paymentTimeFrom = null;

    /**
     * @var int $paymentTimeTo
     */
    protected $paymentTimeTo = null;

    /**
     * @var int $pageSize
     */
    protected $pageSize = null;

    /**
     * @var int $pageNumber
     */
    protected $pageNumber = null;

    /**
     * @var int $strictedSearch
     */
    protected $strictedSearch = null;

    /**
     * @param string $sessionId
     * @param int $sellerId
     * @param int $itemId
     * @param int $paymentTimeFrom
     * @param int $paymentTimeTo
     * @param int $pageSize
     * @param int $pageNumber
     * @param int $strictedSearch
     */
    public function __construct($sessionId = null, $sellerId = null, $itemId = null, $paymentTimeFrom = null, $paymentTimeTo = null, $pageSize = null, $pageNumber = null, $strictedSearch = null)
    {
      $this->sessionId = $sessionId;
      $this->sellerId = $sellerId;
      $this->itemId = $itemId;
      $this->paymentTimeFrom = $paymentTimeFrom;
      $this->paymentTimeTo = $paymentTimeTo;
      $this->pageSize = $pageSize;
      $this->pageNumber = $pageNumber;
      $this->strictedSearch = $strictedSearch;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetMyPaymentsRequest
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetMyPaymentsRequest
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetMyPaymentsRequest
     */
    public function setItemId($itemId)
    {
      $this->itemId = $itemId;
      return $this;
    }

    /**
     * @return int
     */
    public function getPaymentTimeFrom()
    {
      return $this->paymentTimeFrom;
    }

    /**
     * @param int $paymentTimeFrom
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetMyPaymentsRequest
     */
    public function setPaymentTimeFrom($paymentTimeFrom)
    {
      $this->paymentTimeFrom = $paymentTimeFrom;
      return $this;
    }

    /**
     * @return int
     */
    public function getPaymentTimeTo()
    {
      return $this->paymentTimeTo;
    }

    /**
     * @param int $paymentTimeTo
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetMyPaymentsRequest
     */
    public function setPaymentTimeTo($paymentTimeTo)
    {
      $this->paymentTimeTo = $paymentTimeTo;
      return $this;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
      return $this->pageSize;
    }

    /**
     * @param int $pageSize
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetMyPaymentsRequest
     */
    public function setPageSize($pageSize)
    {
      $this->pageSize = $pageSize;
      return $this;
    }

    /**
     * @return int
     */
    public function getPageNumber()
    {
      return $this->pageNumber;
    }

    /**
     * @param int $pageNumber
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetMyPaymentsRequest
     */
    public function setPageNumber($pageNumber)
    {
      $this->pageNumber = $pageNumber;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetMyPaymentsRequest
     */
    public function setStrictedSearch($strictedSearch)
    {
      $this->strictedSearch = $strictedSearch;
      return $this;
    }

}
