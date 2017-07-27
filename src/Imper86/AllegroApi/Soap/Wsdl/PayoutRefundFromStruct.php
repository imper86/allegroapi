<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class PayoutRefundFromStruct
{

    /**
     * @var int $tranasctionId
     */
    protected $tranasctionId = null;

    /**
     * @var int $refundId
     */
    protected $refundId = null;

    /**
     * @var string $refundReason
     */
    protected $refundReason = null;

    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var int $fromUserId
     */
    protected $fromUserId = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @var string $paidDate
     */
    protected $paidDate = null;

    /**
     * @param int $tranasctionId
     * @param int $refundId
     * @param string $refundReason
     * @param int $itemId
     * @param int $fromUserId
     * @param float $amount
     * @param string $paidDate
     */
    public function __construct($tranasctionId = null, $refundId = null, $refundReason = null, $itemId = null, $fromUserId = null, $amount = null, $paidDate = null)
    {
      $this->tranasctionId = $tranasctionId;
      $this->refundId = $refundId;
      $this->refundReason = $refundReason;
      $this->itemId = $itemId;
      $this->fromUserId = $fromUserId;
      $this->amount = $amount;
      $this->paidDate = $paidDate;
    }

    /**
     * @return int
     */
    public function getTranasctionId()
    {
      return $this->tranasctionId;
    }

    /**
     * @param int $tranasctionId
     * @return \Imper86\AllegroApi\Soap\Wsdl\PayoutRefundFromStruct
     */
    public function setTranasctionId($tranasctionId)
    {
      $this->tranasctionId = $tranasctionId;
      return $this;
    }

    /**
     * @return int
     */
    public function getRefundId()
    {
      return $this->refundId;
    }

    /**
     * @param int $refundId
     * @return \Imper86\AllegroApi\Soap\Wsdl\PayoutRefundFromStruct
     */
    public function setRefundId($refundId)
    {
      $this->refundId = $refundId;
      return $this;
    }

    /**
     * @return string
     */
    public function getRefundReason()
    {
      return $this->refundReason;
    }

    /**
     * @param string $refundReason
     * @return \Imper86\AllegroApi\Soap\Wsdl\PayoutRefundFromStruct
     */
    public function setRefundReason($refundReason)
    {
      $this->refundReason = $refundReason;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\PayoutRefundFromStruct
     */
    public function setItemId($itemId)
    {
      $this->itemId = $itemId;
      return $this;
    }

    /**
     * @return int
     */
    public function getFromUserId()
    {
      return $this->fromUserId;
    }

    /**
     * @param int $fromUserId
     * @return \Imper86\AllegroApi\Soap\Wsdl\PayoutRefundFromStruct
     */
    public function setFromUserId($fromUserId)
    {
      $this->fromUserId = $fromUserId;
      return $this;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param float $amount
     * @return \Imper86\AllegroApi\Soap\Wsdl\PayoutRefundFromStruct
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaidDate()
    {
      return $this->paidDate;
    }

    /**
     * @param string $paidDate
     * @return \Imper86\AllegroApi\Soap\Wsdl\PayoutRefundFromStruct
     */
    public function setPaidDate($paidDate)
    {
      $this->paidDate = $paidDate;
      return $this;
    }

}
