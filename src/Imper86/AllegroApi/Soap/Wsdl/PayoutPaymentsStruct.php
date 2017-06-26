<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class PayoutPaymentsStruct
{

    /**
     * @var int $tranasctionId
     */
    protected $tranasctionId = null;

    /**
     * @var string $userName
     */
    protected $userName = null;

    /**
     * @var int $userId
     */
    protected $userId = null;

    /**
     * @var float $amount
     */
    protected $amount = null;

    /**
     * @var float $transportAmount
     */
    protected $transportAmount = null;

    /**
     * @var float $totalAmount
     */
    protected $totalAmount = null;

    /**
     * @var string $paidDate
     */
    protected $paidDate = null;

    /**
     * @param int $tranasctionId
     * @param string $userName
     * @param int $userId
     * @param float $amount
     * @param float $transportAmount
     * @param float $totalAmount
     * @param string $paidDate
     */
    public function __construct($tranasctionId = null, $userName = null, $userId = null, $amount = null, $transportAmount = null, $totalAmount = null, $paidDate = null)
    {
      $this->tranasctionId = $tranasctionId;
      $this->userName = $userName;
      $this->userId = $userId;
      $this->amount = $amount;
      $this->transportAmount = $transportAmount;
      $this->totalAmount = $totalAmount;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\PayoutPaymentsStruct
     */
    public function setTranasctionId($tranasctionId)
    {
      $this->tranasctionId = $tranasctionId;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
      return $this->userName;
    }

    /**
     * @param string $userName
     * @return \Imper86\AllegroApi\Soap\Wsdl\PayoutPaymentsStruct
     */
    public function setUserName($userName)
    {
      $this->userName = $userName;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
      return $this->userId;
    }

    /**
     * @param int $userId
     * @return \Imper86\AllegroApi\Soap\Wsdl\PayoutPaymentsStruct
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\PayoutPaymentsStruct
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return float
     */
    public function getTransportAmount()
    {
      return $this->transportAmount;
    }

    /**
     * @param float $transportAmount
     * @return \Imper86\AllegroApi\Soap\Wsdl\PayoutPaymentsStruct
     */
    public function setTransportAmount($transportAmount)
    {
      $this->transportAmount = $transportAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getTotalAmount()
    {
      return $this->totalAmount;
    }

    /**
     * @param float $totalAmount
     * @return \Imper86\AllegroApi\Soap\Wsdl\PayoutPaymentsStruct
     */
    public function setTotalAmount($totalAmount)
    {
      $this->totalAmount = $totalAmount;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\PayoutPaymentsStruct
     */
    public function setPaidDate($paidDate)
    {
      $this->paidDate = $paidDate;
      return $this;
    }

}
