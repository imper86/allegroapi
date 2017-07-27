<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class UserPayoutStruct
{

    /**
     * @var int $payTransId
     */
    protected $payTransId = null;

    /**
     * @var string $payTransStatus
     */
    protected $payTransStatus = null;

    /**
     * @var float $payTransAmount
     */
    protected $payTransAmount = null;

    /**
     * @var int $payTransCreateDate
     */
    protected $payTransCreateDate = null;

    /**
     * @var int $payTransRecvDate
     */
    protected $payTransRecvDate = null;

    /**
     * @var int $payTransCancelDate
     */
    protected $payTransCancelDate = null;

    /**
     * @var string $payTransReport
     */
    protected $payTransReport = null;

    /**
     * @param int $payTransId
     * @param string $payTransStatus
     * @param float $payTransAmount
     * @param int $payTransCreateDate
     * @param int $payTransRecvDate
     * @param int $payTransCancelDate
     * @param string $payTransReport
     */
    public function __construct($payTransId = null, $payTransStatus = null, $payTransAmount = null, $payTransCreateDate = null, $payTransRecvDate = null, $payTransCancelDate = null, $payTransReport = null)
    {
      $this->payTransId = $payTransId;
      $this->payTransStatus = $payTransStatus;
      $this->payTransAmount = $payTransAmount;
      $this->payTransCreateDate = $payTransCreateDate;
      $this->payTransRecvDate = $payTransRecvDate;
      $this->payTransCancelDate = $payTransCancelDate;
      $this->payTransReport = $payTransReport;
    }

    /**
     * @return int
     */
    public function getPayTransId()
    {
      return $this->payTransId;
    }

    /**
     * @param int $payTransId
     * @return \Imper86\AllegroApi\Soap\Wsdl\UserPayoutStruct
     */
    public function setPayTransId($payTransId)
    {
      $this->payTransId = $payTransId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayTransStatus()
    {
      return $this->payTransStatus;
    }

    /**
     * @param string $payTransStatus
     * @return \Imper86\AllegroApi\Soap\Wsdl\UserPayoutStruct
     */
    public function setPayTransStatus($payTransStatus)
    {
      $this->payTransStatus = $payTransStatus;
      return $this;
    }

    /**
     * @return float
     */
    public function getPayTransAmount()
    {
      return $this->payTransAmount;
    }

    /**
     * @param float $payTransAmount
     * @return \Imper86\AllegroApi\Soap\Wsdl\UserPayoutStruct
     */
    public function setPayTransAmount($payTransAmount)
    {
      $this->payTransAmount = $payTransAmount;
      return $this;
    }

    /**
     * @return int
     */
    public function getPayTransCreateDate()
    {
      return $this->payTransCreateDate;
    }

    /**
     * @param int $payTransCreateDate
     * @return \Imper86\AllegroApi\Soap\Wsdl\UserPayoutStruct
     */
    public function setPayTransCreateDate($payTransCreateDate)
    {
      $this->payTransCreateDate = $payTransCreateDate;
      return $this;
    }

    /**
     * @return int
     */
    public function getPayTransRecvDate()
    {
      return $this->payTransRecvDate;
    }

    /**
     * @param int $payTransRecvDate
     * @return \Imper86\AllegroApi\Soap\Wsdl\UserPayoutStruct
     */
    public function setPayTransRecvDate($payTransRecvDate)
    {
      $this->payTransRecvDate = $payTransRecvDate;
      return $this;
    }

    /**
     * @return int
     */
    public function getPayTransCancelDate()
    {
      return $this->payTransCancelDate;
    }

    /**
     * @param int $payTransCancelDate
     * @return \Imper86\AllegroApi\Soap\Wsdl\UserPayoutStruct
     */
    public function setPayTransCancelDate($payTransCancelDate)
    {
      $this->payTransCancelDate = $payTransCancelDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayTransReport()
    {
      return $this->payTransReport;
    }

    /**
     * @param string $payTransReport
     * @return \Imper86\AllegroApi\Soap\Wsdl\UserPayoutStruct
     */
    public function setPayTransReport($payTransReport)
    {
      $this->payTransReport = $payTransReport;
      return $this;
    }

}
