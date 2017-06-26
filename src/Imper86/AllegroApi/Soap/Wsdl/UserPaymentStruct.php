<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class UserPaymentStruct
{

    /**
     * @var int $payTransId
     */
    protected $payTransId = null;

    /**
     * @var ArrayOfPaymentsellersstruct $payTransSellers
     */
    protected $payTransSellers = null;

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
     * @var float $payTransPrice
     */
    protected $payTransPrice = null;

    /**
     * @var float $payTransPostageAmount
     */
    protected $payTransPostageAmount = null;

    /**
     * @var int $payTransIncomplete
     */
    protected $payTransIncomplete = null;

    /**
     * @param int $payTransId
     * @param string $payTransType
     * @param string $payTransStatus
     * @param float $payTransAmount
     * @param int $payTransCreateDate
     * @param float $payTransPrice
     * @param float $payTransPostageAmount
     * @param int $payTransIncomplete
     */
    public function __construct($payTransId = null, $payTransType = null, $payTransStatus = null, $payTransAmount = null, $payTransCreateDate = null, $payTransPrice = null, $payTransPostageAmount = null, $payTransIncomplete = null)
    {
      $this->payTransId = $payTransId;
      $this->payTransType = $payTransType;
      $this->payTransStatus = $payTransStatus;
      $this->payTransAmount = $payTransAmount;
      $this->payTransCreateDate = $payTransCreateDate;
      $this->payTransPrice = $payTransPrice;
      $this->payTransPostageAmount = $payTransPostageAmount;
      $this->payTransIncomplete = $payTransIncomplete;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\UserPaymentStruct
     */
    public function setPayTransId($payTransId)
    {
      $this->payTransId = $payTransId;
      return $this;
    }

    /**
     * @return ArrayOfPaymentsellersstruct
     */
    public function getPayTransSellers()
    {
      return $this->payTransSellers;
    }

    /**
     * @param ArrayOfPaymentsellersstruct $payTransSellers
     * @return \Imper86\AllegroApi\Soap\Wsdl\UserPaymentStruct
     */
    public function setPayTransSellers($payTransSellers)
    {
      $this->payTransSellers = $payTransSellers;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\UserPaymentStruct
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\UserPaymentStruct
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\UserPaymentStruct
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\UserPaymentStruct
     */
    public function setPayTransCreateDate($payTransCreateDate)
    {
      $this->payTransCreateDate = $payTransCreateDate;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\UserPaymentStruct
     */
    public function setPayTransPrice($payTransPrice)
    {
      $this->payTransPrice = $payTransPrice;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\UserPaymentStruct
     */
    public function setPayTransPostageAmount($payTransPostageAmount)
    {
      $this->payTransPostageAmount = $payTransPostageAmount;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\UserPaymentStruct
     */
    public function setPayTransIncomplete($payTransIncomplete)
    {
      $this->payTransIncomplete = $payTransIncomplete;
      return $this;
    }

}
