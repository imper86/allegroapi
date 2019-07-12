<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class UserIncomingPaymentStruct
{

    /**
     * @var int $payTransId
     */
    protected $payTransId = null;

    /**
     * @var int $payTransItId
     */
    protected $payTransItId = null;

    /**
     * @var int $payTransBuyerId
     */
    protected $payTransBuyerId = null;

    /**
     * @var string $payTransType
     */
    protected $payTransType = null;

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
     * @var float $payTransPrice
     */
    protected $payTransPrice = null;

    /**
     * @var int $payTransCount
     */
    protected $payTransCount = null;

    /**
     * @var float $payTransPostageAmount
     */
    protected $payTransPostageAmount = null;

    /**
     * @var ArrayOfPaymentdetailsstruct $payTransDetails
     */
    protected $payTransDetails = null;

    /**
     * @var int $payTransIncomplete
     */
    protected $payTransIncomplete = null;

    /**
     * @var int $payTransMainId
     */
    protected $payTransMainId = null;

    /**
     * @param int $payTransId
     * @param int $payTransItId
     * @param int $payTransBuyerId
     * @param string $payTransType
     * @param string $payTransStatus
     * @param float $payTransAmount
     * @param int $payTransCreateDate
     * @param int $payTransRecvDate
     * @param float $payTransPrice
     * @param int $payTransCount
     * @param float $payTransPostageAmount
     * @param int $payTransIncomplete
     * @param int $payTransMainId
     */
    public function __construct($payTransId = null, $payTransItId = null, $payTransBuyerId = null, $payTransType = null, $payTransStatus = null, $payTransAmount = null, $payTransCreateDate = null, $payTransRecvDate = null, $payTransPrice = null, $payTransCount = null, $payTransPostageAmount = null, $payTransIncomplete = null, $payTransMainId = null)
    {
      $this->payTransId = $payTransId;
      $this->payTransItId = $payTransItId;
      $this->payTransBuyerId = $payTransBuyerId;
      $this->payTransType = $payTransType;
      $this->payTransStatus = $payTransStatus;
      $this->payTransAmount = $payTransAmount;
      $this->payTransCreateDate = $payTransCreateDate;
      $this->payTransRecvDate = $payTransRecvDate;
      $this->payTransPrice = $payTransPrice;
      $this->payTransCount = $payTransCount;
      $this->payTransPostageAmount = $payTransPostageAmount;
      $this->payTransIncomplete = $payTransIncomplete;
      $this->payTransMainId = $payTransMainId;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserIncomingPaymentStruct
     */
    public function setPayTransId($payTransId)
    {
      $this->payTransId = $payTransId;
      return $this;
    }

    /**
     * @return int
     */
    public function getPayTransItId()
    {
      return $this->payTransItId;
    }

    /**
     * @param int $payTransItId
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserIncomingPaymentStruct
     */
    public function setPayTransItId($payTransItId)
    {
      $this->payTransItId = $payTransItId;
      return $this;
    }

    /**
     * @return int
     */
    public function getPayTransBuyerId()
    {
      return $this->payTransBuyerId;
    }

    /**
     * @param int $payTransBuyerId
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserIncomingPaymentStruct
     */
    public function setPayTransBuyerId($payTransBuyerId)
    {
      $this->payTransBuyerId = $payTransBuyerId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayTransType()
    {
      return $this->payTransType;
    }

    /**
     * @param string $payTransType
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserIncomingPaymentStruct
     */
    public function setPayTransType($payTransType)
    {
      $this->payTransType = $payTransType;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserIncomingPaymentStruct
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserIncomingPaymentStruct
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserIncomingPaymentStruct
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserIncomingPaymentStruct
     */
    public function setPayTransRecvDate($payTransRecvDate)
    {
      $this->payTransRecvDate = $payTransRecvDate;
      return $this;
    }

    /**
     * @return float
     */
    public function getPayTransPrice()
    {
      return $this->payTransPrice;
    }

    /**
     * @param float $payTransPrice
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserIncomingPaymentStruct
     */
    public function setPayTransPrice($payTransPrice)
    {
      $this->payTransPrice = $payTransPrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getPayTransCount()
    {
      return $this->payTransCount;
    }

    /**
     * @param int $payTransCount
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserIncomingPaymentStruct
     */
    public function setPayTransCount($payTransCount)
    {
      $this->payTransCount = $payTransCount;
      return $this;
    }

    /**
     * @return float
     */
    public function getPayTransPostageAmount()
    {
      return $this->payTransPostageAmount;
    }

    /**
     * @param float $payTransPostageAmount
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserIncomingPaymentStruct
     */
    public function setPayTransPostageAmount($payTransPostageAmount)
    {
      $this->payTransPostageAmount = $payTransPostageAmount;
      return $this;
    }

    /**
     * @return ArrayOfPaymentdetailsstruct
     */
    public function getPayTransDetails()
    {
      return $this->payTransDetails;
    }

    /**
     * @param ArrayOfPaymentdetailsstruct $payTransDetails
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserIncomingPaymentStruct
     */
    public function setPayTransDetails($payTransDetails)
    {
      $this->payTransDetails = $payTransDetails;
      return $this;
    }

    /**
     * @return int
     */
    public function getPayTransIncomplete()
    {
      return $this->payTransIncomplete;
    }

    /**
     * @param int $payTransIncomplete
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserIncomingPaymentStruct
     */
    public function setPayTransIncomplete($payTransIncomplete)
    {
      $this->payTransIncomplete = $payTransIncomplete;
      return $this;
    }

    /**
     * @return int
     */
    public function getPayTransMainId()
    {
      return $this->payTransMainId;
    }

    /**
     * @param int $payTransMainId
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\UserIncomingPaymentStruct
     */
    public function setPayTransMainId($payTransMainId)
    {
      $this->payTransMainId = $payTransMainId;
      return $this;
    }

}
