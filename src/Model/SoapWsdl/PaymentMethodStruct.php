<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class PaymentMethodStruct
{

    /**
     * @var string $paymentMethodId
     */
    protected $paymentMethodId = null;

    /**
     * @var string $paymentMethodName
     */
    protected $paymentMethodName = null;

    /**
     * @var string $paymentMethodImage
     */
    protected $paymentMethodImage = null;

    /**
     * @var int $paymentMethodUsage
     */
    protected $paymentMethodUsage = null;

    /**
     * @param string $paymentMethodId
     * @param string $paymentMethodName
     * @param string $paymentMethodImage
     * @param int $paymentMethodUsage
     */
    public function __construct($paymentMethodId = null, $paymentMethodName = null, $paymentMethodImage = null, $paymentMethodUsage = null)
    {
      $this->paymentMethodId = $paymentMethodId;
      $this->paymentMethodName = $paymentMethodName;
      $this->paymentMethodImage = $paymentMethodImage;
      $this->paymentMethodUsage = $paymentMethodUsage;
    }

    /**
     * @return string
     */
    public function getPaymentMethodId()
    {
      return $this->paymentMethodId;
    }

    /**
     * @param string $paymentMethodId
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PaymentMethodStruct
     */
    public function setPaymentMethodId($paymentMethodId)
    {
      $this->paymentMethodId = $paymentMethodId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentMethodName()
    {
      return $this->paymentMethodName;
    }

    /**
     * @param string $paymentMethodName
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PaymentMethodStruct
     */
    public function setPaymentMethodName($paymentMethodName)
    {
      $this->paymentMethodName = $paymentMethodName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentMethodImage()
    {
      return $this->paymentMethodImage;
    }

    /**
     * @param string $paymentMethodImage
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PaymentMethodStruct
     */
    public function setPaymentMethodImage($paymentMethodImage)
    {
      $this->paymentMethodImage = $paymentMethodImage;
      return $this;
    }

    /**
     * @return int
     */
    public function getPaymentMethodUsage()
    {
      return $this->paymentMethodUsage;
    }

    /**
     * @param int $paymentMethodUsage
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PaymentMethodStruct
     */
    public function setPaymentMethodUsage($paymentMethodUsage)
    {
      $this->paymentMethodUsage = $paymentMethodUsage;
      return $this;
    }

}
