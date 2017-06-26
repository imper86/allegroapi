<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class PaymentItemsStruct
{

    /**
     * @var int $payTransItId
     */
    protected $payTransItId = null;

    /**
     * @var string $payTransItName
     */
    protected $payTransItName = null;

    /**
     * @var int $payTransItCount
     */
    protected $payTransItCount = null;

    /**
     * @var float $payTransItPrice
     */
    protected $payTransItPrice = null;

    /**
     * @param int $payTransItId
     * @param string $payTransItName
     * @param int $payTransItCount
     * @param float $payTransItPrice
     */
    public function __construct($payTransItId = null, $payTransItName = null, $payTransItCount = null, $payTransItPrice = null)
    {
      $this->payTransItId = $payTransItId;
      $this->payTransItName = $payTransItName;
      $this->payTransItCount = $payTransItCount;
      $this->payTransItPrice = $payTransItPrice;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\PaymentItemsStruct
     */
    public function setPayTransItId($payTransItId)
    {
      $this->payTransItId = $payTransItId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayTransItName()
    {
      return $this->payTransItName;
    }

    /**
     * @param string $payTransItName
     * @return \Imper86\AllegroApi\Soap\Wsdl\PaymentItemsStruct
     */
    public function setPayTransItName($payTransItName)
    {
      $this->payTransItName = $payTransItName;
      return $this;
    }

    /**
     * @return int
     */
    public function getPayTransItCount()
    {
      return $this->payTransItCount;
    }

    /**
     * @param int $payTransItCount
     * @return \Imper86\AllegroApi\Soap\Wsdl\PaymentItemsStruct
     */
    public function setPayTransItCount($payTransItCount)
    {
      $this->payTransItCount = $payTransItCount;
      return $this;
    }

    /**
     * @return float
     */
    public function getPayTransItPrice()
    {
      return $this->payTransItPrice;
    }

    /**
     * @param float $payTransItPrice
     * @return \Imper86\AllegroApi\Soap\Wsdl\PaymentItemsStruct
     */
    public function setPayTransItPrice($payTransItPrice)
    {
      $this->payTransItPrice = $payTransItPrice;
      return $this;
    }

}
