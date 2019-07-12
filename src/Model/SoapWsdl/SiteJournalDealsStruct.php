<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class SiteJournalDealsStruct
{

    /**
     * @var int $dealEventId
     */
    protected $dealEventId = null;

    /**
     * @var int $dealEventType
     */
    protected $dealEventType = null;

    /**
     * @var int $dealEventTime
     */
    protected $dealEventTime = null;

    /**
     * @var int $dealId
     */
    protected $dealId = null;

    /**
     * @var int $dealTransactionId
     */
    protected $dealTransactionId = null;

    /**
     * @var int $dealSellerId
     */
    protected $dealSellerId = null;

    /**
     * @var int $dealItemId
     */
    protected $dealItemId = null;

    /**
     * @var int $dealBuyerId
     */
    protected $dealBuyerId = null;

    /**
     * @var int $dealQuantity
     */
    protected $dealQuantity = null;

    /**
     * @param int $dealEventId
     * @param int $dealEventType
     * @param int $dealEventTime
     * @param int $dealId
     * @param int $dealTransactionId
     * @param int $dealSellerId
     * @param int $dealItemId
     * @param int $dealBuyerId
     * @param int $dealQuantity
     */
    public function __construct($dealEventId = null, $dealEventType = null, $dealEventTime = null, $dealId = null, $dealTransactionId = null, $dealSellerId = null, $dealItemId = null, $dealBuyerId = null, $dealQuantity = null)
    {
      $this->dealEventId = $dealEventId;
      $this->dealEventType = $dealEventType;
      $this->dealEventTime = $dealEventTime;
      $this->dealId = $dealId;
      $this->dealTransactionId = $dealTransactionId;
      $this->dealSellerId = $dealSellerId;
      $this->dealItemId = $dealItemId;
      $this->dealBuyerId = $dealBuyerId;
      $this->dealQuantity = $dealQuantity;
    }

    /**
     * @return int
     */
    public function getDealEventId()
    {
      return $this->dealEventId;
    }

    /**
     * @param int $dealEventId
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\SiteJournalDealsStruct
     */
    public function setDealEventId($dealEventId)
    {
      $this->dealEventId = $dealEventId;
      return $this;
    }

    /**
     * @return int
     */
    public function getDealEventType()
    {
      return $this->dealEventType;
    }

    /**
     * @param int $dealEventType
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\SiteJournalDealsStruct
     */
    public function setDealEventType($dealEventType)
    {
      $this->dealEventType = $dealEventType;
      return $this;
    }

    /**
     * @return int
     */
    public function getDealEventTime()
    {
      return $this->dealEventTime;
    }

    /**
     * @param int $dealEventTime
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\SiteJournalDealsStruct
     */
    public function setDealEventTime($dealEventTime)
    {
      $this->dealEventTime = $dealEventTime;
      return $this;
    }

    /**
     * @return int
     */
    public function getDealId()
    {
      return $this->dealId;
    }

    /**
     * @param int $dealId
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\SiteJournalDealsStruct
     */
    public function setDealId($dealId)
    {
      $this->dealId = $dealId;
      return $this;
    }

    /**
     * @return int
     */
    public function getDealTransactionId()
    {
      return $this->dealTransactionId;
    }

    /**
     * @param int $dealTransactionId
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\SiteJournalDealsStruct
     */
    public function setDealTransactionId($dealTransactionId)
    {
      $this->dealTransactionId = $dealTransactionId;
      return $this;
    }

    /**
     * @return int
     */
    public function getDealSellerId()
    {
      return $this->dealSellerId;
    }

    /**
     * @param int $dealSellerId
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\SiteJournalDealsStruct
     */
    public function setDealSellerId($dealSellerId)
    {
      $this->dealSellerId = $dealSellerId;
      return $this;
    }

    /**
     * @return int
     */
    public function getDealItemId()
    {
      return $this->dealItemId;
    }

    /**
     * @param int $dealItemId
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\SiteJournalDealsStruct
     */
    public function setDealItemId($dealItemId)
    {
      $this->dealItemId = $dealItemId;
      return $this;
    }

    /**
     * @return int
     */
    public function getDealBuyerId()
    {
      return $this->dealBuyerId;
    }

    /**
     * @param int $dealBuyerId
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\SiteJournalDealsStruct
     */
    public function setDealBuyerId($dealBuyerId)
    {
      $this->dealBuyerId = $dealBuyerId;
      return $this;
    }

    /**
     * @return int
     */
    public function getDealQuantity()
    {
      return $this->dealQuantity;
    }

    /**
     * @param int $dealQuantity
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\SiteJournalDealsStruct
     */
    public function setDealQuantity($dealQuantity)
    {
      $this->dealQuantity = $dealQuantity;
      return $this;
    }

}
