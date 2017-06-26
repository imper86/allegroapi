<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class PayoutRefundToStruct
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
     * @var int $toUserId
     */
    protected $toUserId = null;

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
     * @param int $toUserId
     * @param float $amount
     * @param string $paidDate
     */
    public function __construct($tranasctionId = null, $refundId = null, $refundReason = null, $itemId = null, $toUserId = null, $amount = null, $paidDate = null)
    {
      $this->tranasctionId = $tranasctionId;
      $this->refundId = $refundId;
      $this->refundReason = $refundReason;
      $this->itemId = $itemId;
      $this->toUserId = $toUserId;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\PayoutRefundToStruct
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\PayoutRefundToStruct
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\PayoutRefundToStruct
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\PayoutRefundToStruct
     */
    public function setItemId($itemId)
    {
      $this->itemId = $itemId;
      return $this;
    }

    /**
     * @return int
     */
    public function getToUserId()
    {
      return $this->toUserId;
    }

    /**
     * @param int $toUserId
     * @return \Imper86\AllegroApi\Soap\Wsdl\PayoutRefundToStruct
     */
    public function setToUserId($toUserId)
    {
      $this->toUserId = $toUserId;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\PayoutRefundToStruct
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\PayoutRefundToStruct
     */
    public function setPaidDate($paidDate)
    {
      $this->paidDate = $paidDate;
      return $this;
    }

}
