<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class PostBuyFormItemDealsStruct
{

    /**
     * @var int $dealId
     */
    protected $dealId = null;

    /**
     * @var float $dealFinalPrice
     */
    protected $dealFinalPrice = null;

    /**
     * @var int $dealQuantity
     */
    protected $dealQuantity = null;

    /**
     * @var \DateTime $dealDate
     */
    protected $dealDate = null;

    /**
     * @var boolean $dealWasDiscounted
     */
    protected $dealWasDiscounted = null;

    /**
     * @var PostBuyFormItemDealsVariantStruct $dealVariant
     */
    protected $dealVariant = null;

    /**
     * @var ArrayOfPostbuyformitemdealsadditionalservicestruct $dealAdditionalServices
     */
    protected $dealAdditionalServices = null;

    /**
     * @param int $dealId
     * @param float $dealFinalPrice
     * @param int $dealQuantity
     * @param \DateTime $dealDate
     * @param boolean $dealWasDiscounted
     */
    public function __construct($dealId = null, $dealFinalPrice = null, $dealQuantity = null, \DateTime $dealDate = null, $dealWasDiscounted = null)
    {
      $this->dealId = $dealId;
      $this->dealFinalPrice = $dealFinalPrice;
      $this->dealQuantity = $dealQuantity;
      $this->dealDate = $dealDate ? $dealDate->format(\DateTime::ATOM) : null;
      $this->dealWasDiscounted = $dealWasDiscounted;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormItemDealsStruct
     */
    public function setDealId($dealId)
    {
      $this->dealId = $dealId;
      return $this;
    }

    /**
     * @return float
     */
    public function getDealFinalPrice()
    {
      return $this->dealFinalPrice;
    }

    /**
     * @param float $dealFinalPrice
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormItemDealsStruct
     */
    public function setDealFinalPrice($dealFinalPrice)
    {
      $this->dealFinalPrice = $dealFinalPrice;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormItemDealsStruct
     */
    public function setDealQuantity($dealQuantity)
    {
      $this->dealQuantity = $dealQuantity;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDealDate()
    {
      if ($this->dealDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->dealDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $dealDate
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormItemDealsStruct
     */
    public function setDealDate(\DateTime $dealDate)
    {
      $this->dealDate = $dealDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDealWasDiscounted()
    {
      return $this->dealWasDiscounted;
    }

    /**
     * @param boolean $dealWasDiscounted
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormItemDealsStruct
     */
    public function setDealWasDiscounted($dealWasDiscounted)
    {
      $this->dealWasDiscounted = $dealWasDiscounted;
      return $this;
    }

    /**
     * @return PostBuyFormItemDealsVariantStruct
     */
    public function getDealVariant()
    {
      return $this->dealVariant;
    }

    /**
     * @param PostBuyFormItemDealsVariantStruct $dealVariant
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormItemDealsStruct
     */
    public function setDealVariant($dealVariant)
    {
      $this->dealVariant = $dealVariant;
      return $this;
    }

    /**
     * @return ArrayOfPostbuyformitemdealsadditionalservicestruct
     */
    public function getDealAdditionalServices()
    {
      return $this->dealAdditionalServices;
    }

    /**
     * @param ArrayOfPostbuyformitemdealsadditionalservicestruct $dealAdditionalServices
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormItemDealsStruct
     */
    public function setDealAdditionalServices($dealAdditionalServices)
    {
      $this->dealAdditionalServices = $dealAdditionalServices;
      return $this;
    }

}
