<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class ItemPaymentOptions
{

    /**
     * @var int $payOptionTransfer
     */
    protected $payOptionTransfer = null;

    /**
     * @var int $payOptionOnDelivery
     */
    protected $payOptionOnDelivery = null;

    /**
     * @var int $payOptionAllegroPay
     */
    protected $payOptionAllegroPay = null;

    /**
     * @var int $payOptionSeeDesc
     */
    protected $payOptionSeeDesc = null;

    /**
     * @var int $payOptionPayu
     */
    protected $payOptionPayu = null;

    /**
     * @var int $payOptionEscrow
     */
    protected $payOptionEscrow = null;

    /**
     * @var int $payOptionQiwi
     */
    protected $payOptionQiwi = null;

    /**
     * @param int $payOptionTransfer
     * @param int $payOptionOnDelivery
     * @param int $payOptionAllegroPay
     * @param int $payOptionSeeDesc
     * @param int $payOptionPayu
     * @param int $payOptionEscrow
     * @param int $payOptionQiwi
     */
    public function __construct($payOptionTransfer = null, $payOptionOnDelivery = null, $payOptionAllegroPay = null, $payOptionSeeDesc = null, $payOptionPayu = null, $payOptionEscrow = null, $payOptionQiwi = null)
    {
      $this->payOptionTransfer = $payOptionTransfer;
      $this->payOptionOnDelivery = $payOptionOnDelivery;
      $this->payOptionAllegroPay = $payOptionAllegroPay;
      $this->payOptionSeeDesc = $payOptionSeeDesc;
      $this->payOptionPayu = $payOptionPayu;
      $this->payOptionEscrow = $payOptionEscrow;
      $this->payOptionQiwi = $payOptionQiwi;
    }

    /**
     * @return int
     */
    public function getPayOptionTransfer()
    {
      return $this->payOptionTransfer;
    }

    /**
     * @param int $payOptionTransfer
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\ItemPaymentOptions
     */
    public function setPayOptionTransfer($payOptionTransfer)
    {
      $this->payOptionTransfer = $payOptionTransfer;
      return $this;
    }

    /**
     * @return int
     */
    public function getPayOptionOnDelivery()
    {
      return $this->payOptionOnDelivery;
    }

    /**
     * @param int $payOptionOnDelivery
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\ItemPaymentOptions
     */
    public function setPayOptionOnDelivery($payOptionOnDelivery)
    {
      $this->payOptionOnDelivery = $payOptionOnDelivery;
      return $this;
    }

    /**
     * @return int
     */
    public function getPayOptionAllegroPay()
    {
      return $this->payOptionAllegroPay;
    }

    /**
     * @param int $payOptionAllegroPay
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\ItemPaymentOptions
     */
    public function setPayOptionAllegroPay($payOptionAllegroPay)
    {
      $this->payOptionAllegroPay = $payOptionAllegroPay;
      return $this;
    }

    /**
     * @return int
     */
    public function getPayOptionSeeDesc()
    {
      return $this->payOptionSeeDesc;
    }

    /**
     * @param int $payOptionSeeDesc
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\ItemPaymentOptions
     */
    public function setPayOptionSeeDesc($payOptionSeeDesc)
    {
      $this->payOptionSeeDesc = $payOptionSeeDesc;
      return $this;
    }

    /**
     * @return int
     */
    public function getPayOptionPayu()
    {
      return $this->payOptionPayu;
    }

    /**
     * @param int $payOptionPayu
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\ItemPaymentOptions
     */
    public function setPayOptionPayu($payOptionPayu)
    {
      $this->payOptionPayu = $payOptionPayu;
      return $this;
    }

    /**
     * @return int
     */
    public function getPayOptionEscrow()
    {
      return $this->payOptionEscrow;
    }

    /**
     * @param int $payOptionEscrow
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\ItemPaymentOptions
     */
    public function setPayOptionEscrow($payOptionEscrow)
    {
      $this->payOptionEscrow = $payOptionEscrow;
      return $this;
    }

    /**
     * @return int
     */
    public function getPayOptionQiwi()
    {
      return $this->payOptionQiwi;
    }

    /**
     * @param int $payOptionQiwi
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\ItemPaymentOptions
     */
    public function setPayOptionQiwi($payOptionQiwi)
    {
      $this->payOptionQiwi = $payOptionQiwi;
      return $this;
    }

}
