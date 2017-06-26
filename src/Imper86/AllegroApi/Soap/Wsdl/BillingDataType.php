<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class BillingDataType
{

    /**
     * @var int $billingId
     */
    protected $billingId = null;

    /**
     * @var string $billingType
     */
    protected $billingType = null;

    /**
     * @var string $billingFixperc
     */
    protected $billingFixperc = null;

    /**
     * @var string $billingName
     */
    protected $billingName = null;

    /**
     * @var string $billingRangeFrom
     */
    protected $billingRangeFrom = null;

    /**
     * @var string $billingRangeTo
     */
    protected $billingRangeTo = null;

    /**
     * @var string $billingCat
     */
    protected $billingCat = null;

    /**
     * @var string $billingRate
     */
    protected $billingRate = null;

    /**
     * @var int $billingAuctionType
     */
    protected $billingAuctionType = null;

    /**
     * @param int $billingId
     * @param string $billingType
     * @param string $billingFixperc
     * @param string $billingName
     * @param string $billingRangeFrom
     * @param string $billingRangeTo
     * @param string $billingCat
     * @param string $billingRate
     * @param int $billingAuctionType
     */
    public function __construct($billingId = null, $billingType = null, $billingFixperc = null, $billingName = null, $billingRangeFrom = null, $billingRangeTo = null, $billingCat = null, $billingRate = null, $billingAuctionType = null)
    {
      $this->billingId = $billingId;
      $this->billingType = $billingType;
      $this->billingFixperc = $billingFixperc;
      $this->billingName = $billingName;
      $this->billingRangeFrom = $billingRangeFrom;
      $this->billingRangeTo = $billingRangeTo;
      $this->billingCat = $billingCat;
      $this->billingRate = $billingRate;
      $this->billingAuctionType = $billingAuctionType;
    }

    /**
     * @return int
     */
    public function getBillingId()
    {
      return $this->billingId;
    }

    /**
     * @param int $billingId
     * @return \Imper86\AllegroApi\Soap\Wsdl\BillingDataType
     */
    public function setBillingId($billingId)
    {
      $this->billingId = $billingId;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingType()
    {
      return $this->billingType;
    }

    /**
     * @param string $billingType
     * @return \Imper86\AllegroApi\Soap\Wsdl\BillingDataType
     */
    public function setBillingType($billingType)
    {
      $this->billingType = $billingType;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingFixperc()
    {
      return $this->billingFixperc;
    }

    /**
     * @param string $billingFixperc
     * @return \Imper86\AllegroApi\Soap\Wsdl\BillingDataType
     */
    public function setBillingFixperc($billingFixperc)
    {
      $this->billingFixperc = $billingFixperc;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingName()
    {
      return $this->billingName;
    }

    /**
     * @param string $billingName
     * @return \Imper86\AllegroApi\Soap\Wsdl\BillingDataType
     */
    public function setBillingName($billingName)
    {
      $this->billingName = $billingName;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingRangeFrom()
    {
      return $this->billingRangeFrom;
    }

    /**
     * @param string $billingRangeFrom
     * @return \Imper86\AllegroApi\Soap\Wsdl\BillingDataType
     */
    public function setBillingRangeFrom($billingRangeFrom)
    {
      $this->billingRangeFrom = $billingRangeFrom;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingRangeTo()
    {
      return $this->billingRangeTo;
    }

    /**
     * @param string $billingRangeTo
     * @return \Imper86\AllegroApi\Soap\Wsdl\BillingDataType
     */
    public function setBillingRangeTo($billingRangeTo)
    {
      $this->billingRangeTo = $billingRangeTo;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingCat()
    {
      return $this->billingCat;
    }

    /**
     * @param string $billingCat
     * @return \Imper86\AllegroApi\Soap\Wsdl\BillingDataType
     */
    public function setBillingCat($billingCat)
    {
      $this->billingCat = $billingCat;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingRate()
    {
      return $this->billingRate;
    }

    /**
     * @param string $billingRate
     * @return \Imper86\AllegroApi\Soap\Wsdl\BillingDataType
     */
    public function setBillingRate($billingRate)
    {
      $this->billingRate = $billingRate;
      return $this;
    }

    /**
     * @return int
     */
    public function getBillingAuctionType()
    {
      return $this->billingAuctionType;
    }

    /**
     * @param int $billingAuctionType
     * @return \Imper86\AllegroApi\Soap\Wsdl\BillingDataType
     */
    public function setBillingAuctionType($billingAuctionType)
    {
      $this->billingAuctionType = $billingAuctionType;
      return $this;
    }

}
