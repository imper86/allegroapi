<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class PostageStruct
{

    /**
     * @var float $postageAmount
     */
    protected $postageAmount = null;

    /**
     * @var float $postageAmountAdd
     */
    protected $postageAmountAdd = null;

    /**
     * @var int $postagePackSize
     */
    protected $postagePackSize = null;

    /**
     * @var int $postageId
     */
    protected $postageId = null;

    /**
     * @var int $postageFreeShipping
     */
    protected $postageFreeShipping = null;

    /**
     * @var int $postageFreeReturn
     */
    protected $postageFreeReturn = null;

    /**
     * @var FulfillmentTimeStruct $postageFulfillmentTime
     */
    protected $postageFulfillmentTime = null;

    /**
     * @param float $postageAmount
     * @param float $postageAmountAdd
     * @param int $postagePackSize
     * @param int $postageId
     * @param int $postageFreeShipping
     * @param FulfillmentTimeStruct $postageFulfillmentTime
     */
    public function __construct($postageAmount = null, $postageAmountAdd = null, $postagePackSize = null, $postageId = null, $postageFreeShipping = null, $postageFulfillmentTime = null)
    {
      $this->postageAmount = $postageAmount;
      $this->postageAmountAdd = $postageAmountAdd;
      $this->postagePackSize = $postagePackSize;
      $this->postageId = $postageId;
      $this->postageFreeShipping = $postageFreeShipping;
      $this->postageFulfillmentTime = $postageFulfillmentTime;
    }

    /**
     * @return float
     */
    public function getPostageAmount()
    {
      return $this->postageAmount;
    }

    /**
     * @param float $postageAmount
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostageStruct
     */
    public function setPostageAmount($postageAmount)
    {
      $this->postageAmount = $postageAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getPostageAmountAdd()
    {
      return $this->postageAmountAdd;
    }

    /**
     * @param float $postageAmountAdd
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostageStruct
     */
    public function setPostageAmountAdd($postageAmountAdd)
    {
      $this->postageAmountAdd = $postageAmountAdd;
      return $this;
    }

    /**
     * @return int
     */
    public function getPostagePackSize()
    {
      return $this->postagePackSize;
    }

    /**
     * @param int $postagePackSize
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostageStruct
     */
    public function setPostagePackSize($postagePackSize)
    {
      $this->postagePackSize = $postagePackSize;
      return $this;
    }

    /**
     * @return int
     */
    public function getPostageId()
    {
      return $this->postageId;
    }

    /**
     * @param int $postageId
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostageStruct
     */
    public function setPostageId($postageId)
    {
      $this->postageId = $postageId;
      return $this;
    }

    /**
     * @return int
     */
    public function getPostageFreeShipping()
    {
      return $this->postageFreeShipping;
    }

    /**
     * @param int $postageFreeShipping
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostageStruct
     */
    public function setPostageFreeShipping($postageFreeShipping)
    {
      $this->postageFreeShipping = $postageFreeShipping;
      return $this;
    }

    /**
     * @return int
     */
    public function getPostageFreeReturn()
    {
      return $this->postageFreeReturn;
    }

    /**
     * @param int $postageFreeReturn
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostageStruct
     */
    public function setPostageFreeReturn($postageFreeReturn)
    {
      $this->postageFreeReturn = $postageFreeReturn;
      return $this;
    }

    /**
     * @return FulfillmentTimeStruct
     */
    public function getPostageFulfillmentTime()
    {
      return $this->postageFulfillmentTime;
    }

    /**
     * @param FulfillmentTimeStruct $postageFulfillmentTime
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostageStruct
     */
    public function setPostageFulfillmentTime($postageFulfillmentTime)
    {
      $this->postageFulfillmentTime = $postageFulfillmentTime;
      return $this;
    }

}
