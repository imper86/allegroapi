<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class ItemsListType
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
     * @var int $leftCount
     */
    protected $leftCount = null;

    /**
     * @var int $bidsCount
     */
    protected $bidsCount = null;

    /**
     * @var int $biddersCount
     */
    protected $biddersCount = null;

    /**
     * @var string $quantityType
     */
    protected $quantityType = null;

    /**
     * @var \DateTime $endingTime
     */
    protected $endingTime = null;

    /**
     * @var string $timeToEnd
     */
    protected $timeToEnd = null;

    /**
     * @var int $categoryId
     */
    protected $categoryId = null;

    /**
     * @var string $conditionInfo
     */
    protected $conditionInfo = null;

    /**
     * @var int $promotionInfo
     */
    protected $promotionInfo = null;

    /**
     * @var int $additionalInfo
     */
    protected $additionalInfo = null;

    /**
     * @var UserInfoType $sellerInfo
     */
    protected $sellerInfo = null;

    /**
     * @var ArrayOfPriceinfotype $priceInfo
     */
    protected $priceInfo = null;

    /**
     * @var ArrayOfPhotoinfotype $photosInfo
     */
    protected $photosInfo = null;

    /**
     * @var ArrayOfParameterinfotype $parametersInfo
     */
    protected $parametersInfo = null;

    /**
     * @var AdvertInfoType $advertInfo
     */
    protected $advertInfo = null;

    /**
     * @param int $itemId
     * @param string $itemTitle
     * @param int $leftCount
     * @param int $bidsCount
     * @param int $biddersCount
     * @param string $quantityType
     * @param string $timeToEnd
     * @param int $categoryId
     * @param string $conditionInfo
     * @param int $promotionInfo
     * @param int $additionalInfo
     */
    public function __construct($itemId = null, $itemTitle = null, $leftCount = null, $bidsCount = null, $biddersCount = null, $quantityType = null, $timeToEnd = null, $categoryId = null, $conditionInfo = null, $promotionInfo = null, $additionalInfo = null)
    {
      $this->itemId = $itemId;
      $this->itemTitle = $itemTitle;
      $this->leftCount = $leftCount;
      $this->bidsCount = $bidsCount;
      $this->biddersCount = $biddersCount;
      $this->quantityType = $quantityType;
      $this->timeToEnd = $timeToEnd;
      $this->categoryId = $categoryId;
      $this->conditionInfo = $conditionInfo;
      $this->promotionInfo = $promotionInfo;
      $this->additionalInfo = $additionalInfo;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\ItemsListType
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\ItemsListType
     */
    public function setItemTitle($itemTitle)
    {
      $this->itemTitle = $itemTitle;
      return $this;
    }

    /**
     * @return int
     */
    public function getLeftCount()
    {
      return $this->leftCount;
    }

    /**
     * @param int $leftCount
     * @return \Imper86\AllegroApi\Soap\Wsdl\ItemsListType
     */
    public function setLeftCount($leftCount)
    {
      $this->leftCount = $leftCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getBidsCount()
    {
      return $this->bidsCount;
    }

    /**
     * @param int $bidsCount
     * @return \Imper86\AllegroApi\Soap\Wsdl\ItemsListType
     */
    public function setBidsCount($bidsCount)
    {
      $this->bidsCount = $bidsCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getBiddersCount()
    {
      return $this->biddersCount;
    }

    /**
     * @param int $biddersCount
     * @return \Imper86\AllegroApi\Soap\Wsdl\ItemsListType
     */
    public function setBiddersCount($biddersCount)
    {
      $this->biddersCount = $biddersCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getQuantityType()
    {
      return $this->quantityType;
    }

    /**
     * @param string $quantityType
     * @return \Imper86\AllegroApi\Soap\Wsdl\ItemsListType
     */
    public function setQuantityType($quantityType)
    {
      $this->quantityType = $quantityType;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndingTime()
    {
      if ($this->endingTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->endingTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $endingTime
     * @return \Imper86\AllegroApi\Soap\Wsdl\ItemsListType
     */
    public function setEndingTime(\DateTime $endingTime = null)
    {
      if ($endingTime == null) {
       $this->endingTime = null;
      } else {
        $this->endingTime = $endingTime->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getTimeToEnd()
    {
      return $this->timeToEnd;
    }

    /**
     * @param string $timeToEnd
     * @return \Imper86\AllegroApi\Soap\Wsdl\ItemsListType
     */
    public function setTimeToEnd($timeToEnd)
    {
      $this->timeToEnd = $timeToEnd;
      return $this;
    }

    /**
     * @return int
     */
    public function getCategoryId()
    {
      return $this->categoryId;
    }

    /**
     * @param int $categoryId
     * @return \Imper86\AllegroApi\Soap\Wsdl\ItemsListType
     */
    public function setCategoryId($categoryId)
    {
      $this->categoryId = $categoryId;
      return $this;
    }

    /**
     * @return string
     */
    public function getConditionInfo()
    {
      return $this->conditionInfo;
    }

    /**
     * @param string $conditionInfo
     * @return \Imper86\AllegroApi\Soap\Wsdl\ItemsListType
     */
    public function setConditionInfo($conditionInfo)
    {
      $this->conditionInfo = $conditionInfo;
      return $this;
    }

    /**
     * @return int
     */
    public function getPromotionInfo()
    {
      return $this->promotionInfo;
    }

    /**
     * @param int $promotionInfo
     * @return \Imper86\AllegroApi\Soap\Wsdl\ItemsListType
     */
    public function setPromotionInfo($promotionInfo)
    {
      $this->promotionInfo = $promotionInfo;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdditionalInfo()
    {
      return $this->additionalInfo;
    }

    /**
     * @param int $additionalInfo
     * @return \Imper86\AllegroApi\Soap\Wsdl\ItemsListType
     */
    public function setAdditionalInfo($additionalInfo)
    {
      $this->additionalInfo = $additionalInfo;
      return $this;
    }

    /**
     * @return UserInfoType
     */
    public function getSellerInfo()
    {
      return $this->sellerInfo;
    }

    /**
     * @param UserInfoType $sellerInfo
     * @return \Imper86\AllegroApi\Soap\Wsdl\ItemsListType
     */
    public function setSellerInfo($sellerInfo)
    {
      $this->sellerInfo = $sellerInfo;
      return $this;
    }

    /**
     * @return ArrayOfPriceinfotype
     */
    public function getPriceInfo()
    {
      return $this->priceInfo;
    }

    /**
     * @param ArrayOfPriceinfotype $priceInfo
     * @return \Imper86\AllegroApi\Soap\Wsdl\ItemsListType
     */
    public function setPriceInfo($priceInfo)
    {
      $this->priceInfo = $priceInfo;
      return $this;
    }

    /**
     * @return ArrayOfPhotoinfotype
     */
    public function getPhotosInfo()
    {
      return $this->photosInfo;
    }

    /**
     * @param ArrayOfPhotoinfotype $photosInfo
     * @return \Imper86\AllegroApi\Soap\Wsdl\ItemsListType
     */
    public function setPhotosInfo($photosInfo)
    {
      $this->photosInfo = $photosInfo;
      return $this;
    }

    /**
     * @return ArrayOfParameterinfotype
     */
    public function getParametersInfo()
    {
      return $this->parametersInfo;
    }

    /**
     * @param ArrayOfParameterinfotype $parametersInfo
     * @return \Imper86\AllegroApi\Soap\Wsdl\ItemsListType
     */
    public function setParametersInfo($parametersInfo)
    {
      $this->parametersInfo = $parametersInfo;
      return $this;
    }

    /**
     * @return AdvertInfoType
     */
    public function getAdvertInfo()
    {
      return $this->advertInfo;
    }

    /**
     * @param AdvertInfoType $advertInfo
     * @return \Imper86\AllegroApi\Soap\Wsdl\ItemsListType
     */
    public function setAdvertInfo($advertInfo)
    {
      $this->advertInfo = $advertInfo;
      return $this;
    }

}
