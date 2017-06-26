<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class RelatedItemStruct
{

    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var string $itemTitle
     */
    protected $itemTitle = null;

    /**
     * @var string $itemThumbnail
     */
    protected $itemThumbnail = null;

    /**
     * @var float $itemPrice
     */
    protected $itemPrice = null;

    /**
     * @var int $itemBoughtCount
     */
    protected $itemBoughtCount = null;

    /**
     * @var float $itemAmount
     */
    protected $itemAmount = null;

    /**
     * @var int $itemPaymentType
     */
    protected $itemPaymentType = null;

    /**
     * @var int $itemSellerId
     */
    protected $itemSellerId = null;

    /**
     * @var string $itemSellerName
     */
    protected $itemSellerName = null;

    /**
     * @var int $itemInvoiceInfo
     */
    protected $itemInvoiceInfo = null;

    /**
     * @var int $itemCategoryId
     */
    protected $itemCategoryId = null;

    /**
     * @param int $itemId
     * @param string $itemTitle
     * @param string $itemThumbnail
     * @param float $itemPrice
     * @param int $itemBoughtCount
     * @param float $itemAmount
     * @param int $itemPaymentType
     * @param int $itemSellerId
     * @param string $itemSellerName
     * @param int $itemInvoiceInfo
     */
    public function __construct($itemId = null, $itemTitle = null, $itemThumbnail = null, $itemPrice = null, $itemBoughtCount = null, $itemAmount = null, $itemPaymentType = null, $itemSellerId = null, $itemSellerName = null, $itemInvoiceInfo = null)
    {
      $this->itemId = $itemId;
      $this->itemTitle = $itemTitle;
      $this->itemThumbnail = $itemThumbnail;
      $this->itemPrice = $itemPrice;
      $this->itemBoughtCount = $itemBoughtCount;
      $this->itemAmount = $itemAmount;
      $this->itemPaymentType = $itemPaymentType;
      $this->itemSellerId = $itemSellerId;
      $this->itemSellerName = $itemSellerName;
      $this->itemInvoiceInfo = $itemInvoiceInfo;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\RelatedItemStruct
     */
    public function setItemId($itemId)
    {
      $this->itemId = $itemId;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemTitle()
    {
      return $this->itemTitle;
    }

    /**
     * @param string $itemTitle
     * @return \Imper86\AllegroApi\Soap\Wsdl\RelatedItemStruct
     */
    public function setItemTitle($itemTitle)
    {
      $this->itemTitle = $itemTitle;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemThumbnail()
    {
      return $this->itemThumbnail;
    }

    /**
     * @param string $itemThumbnail
     * @return \Imper86\AllegroApi\Soap\Wsdl\RelatedItemStruct
     */
    public function setItemThumbnail($itemThumbnail)
    {
      $this->itemThumbnail = $itemThumbnail;
      return $this;
    }

    /**
     * @return float
     */
    public function getItemPrice()
    {
      return $this->itemPrice;
    }

    /**
     * @param float $itemPrice
     * @return \Imper86\AllegroApi\Soap\Wsdl\RelatedItemStruct
     */
    public function setItemPrice($itemPrice)
    {
      $this->itemPrice = $itemPrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemBoughtCount()
    {
      return $this->itemBoughtCount;
    }

    /**
     * @param int $itemBoughtCount
     * @return \Imper86\AllegroApi\Soap\Wsdl\RelatedItemStruct
     */
    public function setItemBoughtCount($itemBoughtCount)
    {
      $this->itemBoughtCount = $itemBoughtCount;
      return $this;
    }

    /**
     * @return float
     */
    public function getItemAmount()
    {
      return $this->itemAmount;
    }

    /**
     * @param float $itemAmount
     * @return \Imper86\AllegroApi\Soap\Wsdl\RelatedItemStruct
     */
    public function setItemAmount($itemAmount)
    {
      $this->itemAmount = $itemAmount;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemPaymentType()
    {
      return $this->itemPaymentType;
    }

    /**
     * @param int $itemPaymentType
     * @return \Imper86\AllegroApi\Soap\Wsdl\RelatedItemStruct
     */
    public function setItemPaymentType($itemPaymentType)
    {
      $this->itemPaymentType = $itemPaymentType;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\RelatedItemStruct
     */
    public function setItemSellerId($itemSellerId)
    {
      $this->itemSellerId = $itemSellerId;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemSellerName()
    {
      return $this->itemSellerName;
    }

    /**
     * @param string $itemSellerName
     * @return \Imper86\AllegroApi\Soap\Wsdl\RelatedItemStruct
     */
    public function setItemSellerName($itemSellerName)
    {
      $this->itemSellerName = $itemSellerName;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemInvoiceInfo()
    {
      return $this->itemInvoiceInfo;
    }

    /**
     * @param int $itemInvoiceInfo
     * @return \Imper86\AllegroApi\Soap\Wsdl\RelatedItemStruct
     */
    public function setItemInvoiceInfo($itemInvoiceInfo)
    {
      $this->itemInvoiceInfo = $itemInvoiceInfo;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemCategoryId()
    {
      return $this->itemCategoryId;
    }

    /**
     * @param int $itemCategoryId
     * @return \Imper86\AllegroApi\Soap\Wsdl\RelatedItemStruct
     */
    public function setItemCategoryId($itemCategoryId)
    {
      $this->itemCategoryId = $itemCategoryId;
      return $this;
    }

}
