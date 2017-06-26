<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class DoRequestSurchargeRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var int $transactionId
     */
    protected $transactionId = null;

    /**
     * @var float $surchargeValue
     */
    protected $surchargeValue = null;

    /**
     * @var string $surchargeMessageToBuyer
     */
    protected $surchargeMessageToBuyer = null;

    /**
     * @param string $sessionHandle
     * @param int $transactionId
     * @param float $surchargeValue
     * @param string $surchargeMessageToBuyer
     */
    public function __construct($sessionHandle = null, $transactionId = null, $surchargeValue = null, $surchargeMessageToBuyer = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->transactionId = $transactionId;
      $this->surchargeValue = $surchargeValue;
      $this->surchargeMessageToBuyer = $surchargeMessageToBuyer;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoRequestSurchargeRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
      return $this;
    }

    /**
     * @return int
     */
    public function getTransactionId()
    {
      return $this->transactionId;
    }

    /**
     * @param int $transactionId
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoRequestSurchargeRequest
     */
    public function setTransactionId($transactionId)
    {
      $this->transactionId = $transactionId;
      return $this;
    }

    /**
     * @return float
     */
    public function getSurchargeValue()
    {
      return $this->surchargeValue;
    }

    /**
     * @param float $surchargeValue
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoRequestSurchargeRequest
     */
    public function setSurchargeValue($surchargeValue)
    {
      $this->surchargeValue = $surchargeValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getSurchargeMessageToBuyer()
    {
      return $this->surchargeMessageToBuyer;
    }

    /**
     * @param string $surchargeMessageToBuyer
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoRequestSurchargeRequest
     */
    public function setSurchargeMessageToBuyer($surchargeMessageToBuyer)
    {
      $this->surchargeMessageToBuyer = $surchargeMessageToBuyer;
      return $this;
    }

}
