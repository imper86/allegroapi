<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class WonItemStruct
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
     * @var string $itemThumbnailUrl
     */
    protected $itemThumbnailUrl = null;

    /**
     * @var ArrayOfItempricestruct $itemPrice
     */
    protected $itemPrice = null;

    /**
     * @var int $itemBoughtQuantity
     */
    protected $itemBoughtQuantity = null;

    /**
     * @var int $itemLeftQuantity
     */
    protected $itemLeftQuantity = null;

    /**
     * @var int $itemQuantityType
     */
    protected $itemQuantityType = null;

    /**
     * @var int $itemEndTime
     */
    protected $itemEndTime = null;

    /**
     * @var string $itemEndTimeLeft
     */
    protected $itemEndTimeLeft = null;

    /**
     * @var UserInfoStruct $itemSeller
     */
    protected $itemSeller = null;

    /**
     * @var int $itemBiddersCounter
     */
    protected $itemBiddersCounter = null;

    /**
     * @var int $itemCategoryId
     */
    protected $itemCategoryId = null;

    /**
     * @var int $itemViewsCounter
     */
    protected $itemViewsCounter = null;

    /**
     * @var string $itemNote
     */
    protected $itemNote = null;

    /**
     * @var int $itemSpecialInfo
     */
    protected $itemSpecialInfo = null;

    /**
     * @var int $itemShopInfo
     */
    protected $itemShopInfo = null;

    /**
     * @var int $itemProductInfo
     */
    protected $itemProductInfo = null;

    /**
     * @var int $itemPayuInfo
     */
    protected $itemPayuInfo = null;

    /**
     * @param int $itemId
     * @param string $itemTitle
     * @param string $itemThumbnailUrl
     * @param int $itemBoughtQuantity
     * @param int $itemLeftQuantity
     * @param int $itemQuantityType
     * @param int $itemEndTime
     * @param string $itemEndTimeLeft
     * @param UserInfoStruct $itemSeller
     * @param int $itemBiddersCounter
     * @param int $itemCategoryId
     * @param int $itemViewsCounter
     * @param string $itemNote
     * @param int $itemSpecialInfo
     * @param int $itemShopInfo
     * @param int $itemProductInfo
     * @param int $itemPayuInfo
     */
    public function __construct($itemId = null, $itemTitle = null, $itemThumbnailUrl = null, $itemBoughtQuantity = null, $itemLeftQuantity = null, $itemQuantityType = null, $itemEndTime = null, $itemEndTimeLeft = null, $itemSeller = null, $itemBiddersCounter = null, $itemCategoryId = null, $itemViewsCounter = null, $itemNote = null, $itemSpecialInfo = null, $itemShopInfo = null, $itemProductInfo = null, $itemPayuInfo = null)
    {
      $this->itemId = $itemId;
      $this->itemTitle = $itemTitle;
      $this->itemThumbnailUrl = $itemThumbnailUrl;
      $this->itemBoughtQuantity = $itemBoughtQuantity;
      $this->itemLeftQuantity = $itemLeftQuantity;
      $this->itemQuantityType = $itemQuantityType;
      $this->itemEndTime = $itemEndTime;
      $this->itemEndTimeLeft = $itemEndTimeLeft;
      $this->itemSeller = $itemSeller;
      $this->itemBiddersCounter = $itemBiddersCounter;
      $this->itemCategoryId = $itemCategoryId;
      $this->itemViewsCounter = $itemViewsCounter;
      $this->itemNote = $itemNote;
      $this->itemSpecialInfo = $itemSpecialInfo;
      $this->itemShopInfo = $itemShopInfo;
      $this->itemProductInfo = $itemProductInfo;
      $this->itemPayuInfo = $itemPayuInfo;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\WonItemStruct
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\WonItemStruct
     */
    public function setItemTitle($itemTitle)
    {
      $this->itemTitle = $itemTitle;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemThumbnailUrl()
    {
      return $this->itemThumbnailUrl;
    }

    /**
     * @param string $itemThumbnailUrl
     * @return \Imper86\AllegroApi\Soap\Wsdl\WonItemStruct
     */
    public function setItemThumbnailUrl($itemThumbnailUrl)
    {
      $this->itemThumbnailUrl = $itemThumbnailUrl;
      return $this;
    }

    /**
     * @return ArrayOfItempricestruct
     */
    public function getItemPrice()
    {
      return $this->itemPrice;
    }

    /**
     * @param ArrayOfItempricestruct $itemPrice
     * @return \Imper86\AllegroApi\Soap\Wsdl\WonItemStruct
     */
    public function setItemPrice($itemPrice)
    {
      $this->itemPrice = $itemPrice;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemBoughtQuantity()
    {
      return $this->itemBoughtQuantity;
    }

    /**
     * @param int $itemBoughtQuantity
     * @return \Imper86\AllegroApi\Soap\Wsdl\WonItemStruct
     */
    public function setItemBoughtQuantity($itemBoughtQuantity)
    {
      $this->itemBoughtQuantity = $itemBoughtQuantity;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemLeftQuantity()
    {
      return $this->itemLeftQuantity;
    }

    /**
     * @param int $itemLeftQuantity
     * @return \Imper86\AllegroApi\Soap\Wsdl\WonItemStruct
     */
    public function setItemLeftQuantity($itemLeftQuantity)
    {
      $this->itemLeftQuantity = $itemLeftQuantity;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemQuantityType()
    {
      return $this->itemQuantityType;
    }

    /**
     * @param int $itemQuantityType
     * @return \Imper86\AllegroApi\Soap\Wsdl\WonItemStruct
     */
    public function setItemQuantityType($itemQuantityType)
    {
      $this->itemQuantityType = $itemQuantityType;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemEndTime()
    {
      return $this->itemEndTime;
    }

    /**
     * @param int $itemEndTime
     * @return \Imper86\AllegroApi\Soap\Wsdl\WonItemStruct
     */
    public function setItemEndTime($itemEndTime)
    {
      $this->itemEndTime = $itemEndTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemEndTimeLeft()
    {
      return $this->itemEndTimeLeft;
    }

    /**
     * @param string $itemEndTimeLeft
     * @return \Imper86\AllegroApi\Soap\Wsdl\WonItemStruct
     */
    public function setItemEndTimeLeft($itemEndTimeLeft)
    {
      $this->itemEndTimeLeft = $itemEndTimeLeft;
      return $this;
    }

    /**
     * @return UserInfoStruct
     */
    public function getItemSeller()
    {
      return $this->itemSeller;
    }

    /**
     * @param UserInfoStruct $itemSeller
     * @return \Imper86\AllegroApi\Soap\Wsdl\WonItemStruct
     */
    public function setItemSeller($itemSeller)
    {
      $this->itemSeller = $itemSeller;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemBiddersCounter()
    {
      return $this->itemBiddersCounter;
    }

    /**
     * @param int $itemBiddersCounter
     * @return \Imper86\AllegroApi\Soap\Wsdl\WonItemStruct
     */
    public function setItemBiddersCounter($itemBiddersCounter)
    {
      $this->itemBiddersCounter = $itemBiddersCounter;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\WonItemStruct
     */
    public function setItemCategoryId($itemCategoryId)
    {
      $this->itemCategoryId = $itemCategoryId;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemViewsCounter()
    {
      return $this->itemViewsCounter;
    }

    /**
     * @param int $itemViewsCounter
     * @return \Imper86\AllegroApi\Soap\Wsdl\WonItemStruct
     */
    public function setItemViewsCounter($itemViewsCounter)
    {
      $this->itemViewsCounter = $itemViewsCounter;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemNote()
    {
      return $this->itemNote;
    }

    /**
     * @param string $itemNote
     * @return \Imper86\AllegroApi\Soap\Wsdl\WonItemStruct
     */
    public function setItemNote($itemNote)
    {
      $this->itemNote = $itemNote;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemSpecialInfo()
    {
      return $this->itemSpecialInfo;
    }

    /**
     * @param int $itemSpecialInfo
     * @return \Imper86\AllegroApi\Soap\Wsdl\WonItemStruct
     */
    public function setItemSpecialInfo($itemSpecialInfo)
    {
      $this->itemSpecialInfo = $itemSpecialInfo;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemShopInfo()
    {
      return $this->itemShopInfo;
    }

    /**
     * @param int $itemShopInfo
     * @return \Imper86\AllegroApi\Soap\Wsdl\WonItemStruct
     */
    public function setItemShopInfo($itemShopInfo)
    {
      $this->itemShopInfo = $itemShopInfo;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemProductInfo()
    {
      return $this->itemProductInfo;
    }

    /**
     * @param int $itemProductInfo
     * @return \Imper86\AllegroApi\Soap\Wsdl\WonItemStruct
     */
    public function setItemProductInfo($itemProductInfo)
    {
      $this->itemProductInfo = $itemProductInfo;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemPayuInfo()
    {
      return $this->itemPayuInfo;
    }

    /**
     * @param int $itemPayuInfo
     * @return \Imper86\AllegroApi\Soap\Wsdl\WonItemStruct
     */
    public function setItemPayuInfo($itemPayuInfo)
    {
      $this->itemPayuInfo = $itemPayuInfo;
      return $this;
    }

}
