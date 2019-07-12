<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class DoSendRefundFormRequest
{

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var int $dealId
     */
    protected $dealId = null;

    /**
     * @var int $reasonId
     */
    protected $reasonId = null;

    /**
     * @var int $refundQuantity
     */
    protected $refundQuantity = null;

    /**
     * @param string $sessionId
     * @param int $dealId
     * @param int $reasonId
     * @param int $refundQuantity
     */
    public function __construct($sessionId = null, $dealId = null, $reasonId = null, $refundQuantity = null)
    {
      $this->sessionId = $sessionId;
      $this->dealId = $dealId;
      $this->reasonId = $reasonId;
      $this->refundQuantity = $refundQuantity;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoSendRefundFormRequest
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return int
     */
    public function getDealId()
    {
      return $this->dealId;
    }

    /**
     * @param int $dealId
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoSendRefundFormRequest
     */
    public function setDealId($dealId)
    {
      $this->dealId = $dealId;
      return $this;
    }

    /**
     * @return int
     */
    public function getReasonId()
    {
      return $this->reasonId;
    }

    /**
     * @param int $reasonId
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoSendRefundFormRequest
     */
    public function setReasonId($reasonId)
    {
      $this->reasonId = $reasonId;
      return $this;
    }

    /**
     * @return int
     */
    public function getRefundQuantity()
    {
      return $this->refundQuantity;
    }

    /**
     * @param int $refundQuantity
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoSendRefundFormRequest
     */
    public function setRefundQuantity($refundQuantity)
    {
      $this->refundQuantity = $refundQuantity;
      return $this;
    }

}
