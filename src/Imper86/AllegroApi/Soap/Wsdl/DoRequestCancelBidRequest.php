<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class DoRequestCancelBidRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var int $requestItemId
     */
    protected $requestItemId = null;

    /**
     * @var string $requestCancelReason
     */
    protected $requestCancelReason = null;

    /**
     * @param string $sessionHandle
     * @param int $requestItemId
     * @param string $requestCancelReason
     */
    public function __construct($sessionHandle = null, $requestItemId = null, $requestCancelReason = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->requestItemId = $requestItemId;
      $this->requestCancelReason = $requestCancelReason;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoRequestCancelBidRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
      return $this;
    }

    /**
     * @return int
     */
    public function getRequestItemId()
    {
      return $this->requestItemId;
    }

    /**
     * @param int $requestItemId
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoRequestCancelBidRequest
     */
    public function setRequestItemId($requestItemId)
    {
      $this->requestItemId = $requestItemId;
      return $this;
    }

    /**
     * @return string
     */
    public function getRequestCancelReason()
    {
      return $this->requestCancelReason;
    }

    /**
     * @param string $requestCancelReason
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoRequestCancelBidRequest
     */
    public function setRequestCancelReason($requestCancelReason)
    {
      $this->requestCancelReason = $requestCancelReason;
      return $this;
    }

}
