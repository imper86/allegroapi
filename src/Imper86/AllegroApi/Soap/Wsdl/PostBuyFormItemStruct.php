<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class PostBuyFormItemStruct
{

    /**
     * @var int $postBuyFormItQuantity
     */
    protected $postBuyFormItQuantity = null;

    /**
     * @var float $postBuyFormItAmount
     */
    protected $postBuyFormItAmount = null;

    /**
     * @var int $postBuyFormItId
     */
    protected $postBuyFormItId = null;

    /**
     * @var string $postBuyFormItTitle
     */
    protected $postBuyFormItTitle = null;

    /**
     * @var int $postBuyFormItCountry
     */
    protected $postBuyFormItCountry = null;

    /**
     * @var float $postBuyFormItPrice
     */
    protected $postBuyFormItPrice = null;

    /**
     * @var ArrayOfPostbuyformitemdealsstruct $postBuyFormItDeals
     */
    protected $postBuyFormItDeals = null;

    /**
     * @param int $postBuyFormItQuantity
     * @param float $postBuyFormItAmount
     * @param int $postBuyFormItId
     * @param string $postBuyFormItTitle
     * @param int $postBuyFormItCountry
     * @param float $postBuyFormItPrice
     */
    public function __construct($postBuyFormItQuantity = null, $postBuyFormItAmount = null, $postBuyFormItId = null, $postBuyFormItTitle = null, $postBuyFormItCountry = null, $postBuyFormItPrice = null)
    {
      $this->postBuyFormItQuantity = $postBuyFormItQuantity;
      $this->postBuyFormItAmount = $postBuyFormItAmount;
      $this->postBuyFormItId = $postBuyFormItId;
      $this->postBuyFormItTitle = $postBuyFormItTitle;
      $this->postBuyFormItCountry = $postBuyFormItCountry;
      $this->postBuyFormItPrice = $postBuyFormItPrice;
    }

    /**
     * @return int
     */
    public function getPostBuyFormItQuantity()
    {
      return $this->postBuyFormItQuantity;
    }

    /**
     * @param int $postBuyFormItQuantity
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormItemStruct
     */
    public function setPostBuyFormItQuantity($postBuyFormItQuantity)
    {
      $this->postBuyFormItQuantity = $postBuyFormItQuantity;
      return $this;
    }

    /**
     * @return float
     */
    public function getPostBuyFormItAmount()
    {
      return $this->postBuyFormItAmount;
    }

    /**
     * @param float $postBuyFormItAmount
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormItemStruct
     */
    public function setPostBuyFormItAmount($postBuyFormItAmount)
    {
      $this->postBuyFormItAmount = $postBuyFormItAmount;
      return $this;
    }

    /**
     * @return int
     */
    public function getPostBuyFormItId()
    {
      return $this->postBuyFormItId;
    }

    /**
     * @param int $postBuyFormItId
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormItemStruct
     */
    public function setPostBuyFormItId($postBuyFormItId)
    {
      $this->postBuyFormItId = $postBuyFormItId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormItTitle()
    {
      return $this->postBuyFormItTitle;
    }

    /**
     * @param string $postBuyFormItTitle
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormItemStruct
     */
    public function setPostBuyFormItTitle($postBuyFormItTitle)
    {
      $this->postBuyFormItTitle = $postBuyFormItTitle;
      return $this;
    }

    /**
     * @return int
     */
    public function getPostBuyFormItCountry()
    {
      return $this->postBuyFormItCountry;
    }

    /**
     * @param int $postBuyFormItCountry
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormItemStruct
     */
    public function setPostBuyFormItCountry($postBuyFormItCountry)
    {
      $this->postBuyFormItCountry = $postBuyFormItCountry;
      return $this;
    }

    /**
     * @return float
     */
    public function getPostBuyFormItPrice()
    {
      return $this->postBuyFormItPrice;
    }

    /**
     * @param float $postBuyFormItPrice
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormItemStruct
     */
    public function setPostBuyFormItPrice($postBuyFormItPrice)
    {
      $this->postBuyFormItPrice = $postBuyFormItPrice;
      return $this;
    }

    /**
     * @return ArrayOfPostbuyformitemdealsstruct
     */
    public function getPostBuyFormItDeals()
    {
      return $this->postBuyFormItDeals;
    }

    /**
     * @param ArrayOfPostbuyformitemdealsstruct $postBuyFormItDeals
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormItemStruct
     */
    public function setPostBuyFormItDeals($postBuyFormItDeals)
    {
      $this->postBuyFormItDeals = $postBuyFormItDeals;
      return $this;
    }

}
