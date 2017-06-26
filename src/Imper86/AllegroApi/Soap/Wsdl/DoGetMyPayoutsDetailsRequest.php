<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class DoGetMyPayoutsDetailsRequest
{

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var int $payoutId
     */
    protected $payoutId = null;

    /**
     * @var int $limit
     */
    protected $limit = null;

    /**
     * @var int $offset
     */
    protected $offset = null;

    /**
     * @param string $sessionId
     * @param int $payoutId
     * @param int $limit
     * @param int $offset
     */
    public function __construct($sessionId = null, $payoutId = null, $limit = null, $offset = null)
    {
      $this->sessionId = $sessionId;
      $this->payoutId = $payoutId;
      $this->limit = $limit;
      $this->offset = $offset;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetMyPayoutsDetailsRequest
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return int
     */
    public function getPayoutId()
    {
      return $this->payoutId;
    }

    /**
     * @param int $payoutId
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetMyPayoutsDetailsRequest
     */
    public function setPayoutId($payoutId)
    {
      $this->payoutId = $payoutId;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetMyPayoutsDetailsRequest
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetMyPayoutsDetailsRequest
     */
    public function setOffset($offset)
    {
      $this->offset = $offset;
      return $this;
    }

}
