<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class SellerShipmentDataStruct
{

    /**
     * @var int $sellerId
     */
    protected $sellerId = null;

    /**
     * @var SellerPaymentInfoStruct $sellerPaymentInfo
     */
    protected $sellerPaymentInfo = null;

    /**
     * @var int $sellerOtherShipmentIsActive
     */
    protected $sellerOtherShipmentIsActive = null;

    /**
     * @var ArrayOfShipmentpaymentinfostruct $generalDeliveryPaymentInfo
     */
    protected $generalDeliveryPaymentInfo = null;

    /**
     * @param int $sellerId
     * @param SellerPaymentInfoStruct $sellerPaymentInfo
     * @param int $sellerOtherShipmentIsActive
     */
    public function __construct($sellerId = null, $sellerPaymentInfo = null, $sellerOtherShipmentIsActive = null)
    {
      $this->sellerId = $sellerId;
      $this->sellerPaymentInfo = $sellerPaymentInfo;
      $this->sellerOtherShipmentIsActive = $sellerOtherShipmentIsActive;
    }

    /**
     * @return int
     */
    public function getSellerId()
    {
      return $this->sellerId;
    }

    /**
     * @param int $sellerId
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellerShipmentDataStruct
     */
    public function setSellerId($sellerId)
    {
      $this->sellerId = $sellerId;
      return $this;
    }

    /**
     * @return SellerPaymentInfoStruct
     */
    public function getSellerPaymentInfo()
    {
      return $this->sellerPaymentInfo;
    }

    /**
     * @param SellerPaymentInfoStruct $sellerPaymentInfo
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellerShipmentDataStruct
     */
    public function setSellerPaymentInfo($sellerPaymentInfo)
    {
      $this->sellerPaymentInfo = $sellerPaymentInfo;
      return $this;
    }

    /**
     * @return int
     */
    public function getSellerOtherShipmentIsActive()
    {
      return $this->sellerOtherShipmentIsActive;
    }

    /**
     * @param int $sellerOtherShipmentIsActive
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellerShipmentDataStruct
     */
    public function setSellerOtherShipmentIsActive($sellerOtherShipmentIsActive)
    {
      $this->sellerOtherShipmentIsActive = $sellerOtherShipmentIsActive;
      return $this;
    }

    /**
     * @return ArrayOfShipmentpaymentinfostruct
     */
    public function getGeneralDeliveryPaymentInfo()
    {
      return $this->generalDeliveryPaymentInfo;
    }

    /**
     * @param ArrayOfShipmentpaymentinfostruct $generalDeliveryPaymentInfo
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellerShipmentDataStruct
     */
    public function setGeneralDeliveryPaymentInfo($generalDeliveryPaymentInfo)
    {
      $this->generalDeliveryPaymentInfo = $generalDeliveryPaymentInfo;
      return $this;
    }

}
