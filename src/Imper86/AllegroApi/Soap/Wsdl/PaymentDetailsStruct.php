<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class PaymentDetailsStruct
{

    /**
     * @var int $payTransDetailsItId
     */
    protected $payTransDetailsItId = null;

    /**
     * @var float $payTransDetailsPrice
     */
    protected $payTransDetailsPrice = null;

    /**
     * @var int $payTransDetailsCount
     */
    protected $payTransDetailsCount = null;

    /**
     * @param int $payTransDetailsItId
     * @param float $payTransDetailsPrice
     * @param int $payTransDetailsCount
     */
    public function __construct($payTransDetailsItId = null, $payTransDetailsPrice = null, $payTransDetailsCount = null)
    {
      $this->payTransDetailsItId = $payTransDetailsItId;
      $this->payTransDetailsPrice = $payTransDetailsPrice;
      $this->payTransDetailsCount = $payTransDetailsCount;
    }

    /**
     * @return int
     */
    public function getPayTransDetailsItId()
    {
      return $this->payTransDetailsItId;
    }

    /**
     * @param int $payTransDetailsItId
     * @return \Imper86\AllegroApi\Soap\Wsdl\PaymentDetailsStruct
     */
    public function setPayTransDetailsItId($payTransDetailsItId)
    {
      $this->payTransDetailsItId = $payTransDetailsItId;
      return $this;
    }

    /**
     * @return float
     */
    public function getPayTransDetailsPrice()
    {
      return $this->payTransDetailsPrice;
    }

    /**
     * @param float $payTransDetailsPrice
     * @return \Imper86\AllegroApi\Soap\Wsdl\PaymentDetailsStruct
     */
    public function setPayTransDetailsPrice($payTransDetailsPrice)
    {
      $this->payTransDetailsPrice = $payTransDetailsPrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getPayTransDetailsCount()
    {
      return $this->payTransDetailsCount;
    }

    /**
     * @param int $payTransDetailsCount
     * @return \Imper86\AllegroApi\Soap\Wsdl\PaymentDetailsStruct
     */
    public function setPayTransDetailsCount($payTransDetailsCount)
    {
      $this->payTransDetailsCount = $payTransDetailsCount;
      return $this;
    }

}
