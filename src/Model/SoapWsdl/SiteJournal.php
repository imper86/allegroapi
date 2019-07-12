<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class SiteJournal
{

    /**
     * @var int $rowId
     */
    protected $rowId = null;

    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var string $changeType
     */
    protected $changeType = null;

    /**
     * @var int $changeDate
     */
    protected $changeDate = null;

    /**
     * @var float $currentPrice
     */
    protected $currentPrice = null;

    /**
     * @var int $itemSellerId
     */
    protected $itemSellerId = null;

    /**
     * @param int $rowId
     * @param int $itemId
     * @param string $changeType
     * @param int $changeDate
     * @param float $currentPrice
     * @param int $itemSellerId
     */
    public function __construct($rowId = null, $itemId = null, $changeType = null, $changeDate = null, $currentPrice = null, $itemSellerId = null)
    {
      $this->rowId = $rowId;
      $this->itemId = $itemId;
      $this->changeType = $changeType;
      $this->changeDate = $changeDate;
      $this->currentPrice = $currentPrice;
      $this->itemSellerId = $itemSellerId;
    }

    /**
     * @return int
     */
    public function getRowId()
    {
      return $this->rowId;
    }

    /**
     * @param int $rowId
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\SiteJournal
     */
    public function setRowId($rowId)
    {
      $this->rowId = $rowId;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemId()
    {
      return $this->itemId;
    }

    /**
     * @param int $itemId
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\SiteJournal
     */
    public function setItemId($itemId)
    {
      $this->itemId = $itemId;
      return $this;
    }

    /**
     * @return string
     */
    public function getChangeType()
    {
      return $this->changeType;
    }

    /**
     * @param string $changeType
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\SiteJournal
     */
    public function setChangeType($changeType)
    {
      $this->changeType = $changeType;
      return $this;
    }

    /**
     * @return int
     */
    public function getChangeDate()
    {
      return $this->changeDate;
    }

    /**
     * @param int $changeDate
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\SiteJournal
     */
    public function setChangeDate($changeDate)
    {
      $this->changeDate = $changeDate;
      return $this;
    }

    /**
     * @return float
     */
    public function getCurrentPrice()
    {
      return $this->currentPrice;
    }

    /**
     * @param float $currentPrice
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\SiteJournal
     */
    public function setCurrentPrice($currentPrice)
    {
      $this->currentPrice = $currentPrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemSellerId()
    {
      return $this->itemSellerId;
    }

    /**
     * @param int $itemSellerId
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\SiteJournal
     */
    public function setItemSellerId($itemSellerId)
    {
      $this->itemSellerId = $itemSellerId;
      return $this;
    }

}
