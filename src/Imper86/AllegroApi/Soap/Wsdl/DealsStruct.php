<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class DealsStruct
{

    /**
     * @var int $dealId
     */
    protected $dealId = null;

    /**
     * @var int $dealDate
     */
    protected $dealDate = null;

    /**
     * @var int $dealQuantity
     */
    protected $dealQuantity = null;

    /**
     * @var float $dealAmountOriginal
     */
    protected $dealAmountOriginal = null;

    /**
     * @var float $dealAmountDiscounted
     */
    protected $dealAmountDiscounted = null;

    /**
     * @param int $dealId
     * @param int $dealDate
     * @param int $dealQuantity
     * @param float $dealAmountOriginal
     * @param float $dealAmountDiscounted
     */
    public function __construct($dealId = null, $dealDate = null, $dealQuantity = null, $dealAmountOriginal = null, $dealAmountDiscounted = null)
    {
      $this->dealId = $dealId;
      $this->dealDate = $dealDate;
      $this->dealQuantity = $dealQuantity;
      $this->dealAmountOriginal = $dealAmountOriginal;
      $this->dealAmountDiscounted = $dealAmountDiscounted;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DealsStruct
     */
    public function setDealId($dealId)
    {
      $this->dealId = $dealId;
      return $this;
    }

    /**
     * @return int
     */
    public function getDealDate()
    {
      return $this->dealDate;
    }

    /**
     * @param int $dealDate
     * @return \Imper86\AllegroApi\Soap\Wsdl\DealsStruct
     */
    public function setDealDate($dealDate)
    {
      $this->dealDate = $dealDate;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DealsStruct
     */
    public function setDealQuantity($dealQuantity)
    {
      $this->dealQuantity = $dealQuantity;
      return $this;
    }

    /**
     * @return float
     */
    public function getDealAmountOriginal()
    {
      return $this->dealAmountOriginal;
    }

    /**
     * @param float $dealAmountOriginal
     * @return \Imper86\AllegroApi\Soap\Wsdl\DealsStruct
     */
    public function setDealAmountOriginal($dealAmountOriginal)
    {
      $this->dealAmountOriginal = $dealAmountOriginal;
      return $this;
    }

    /**
     * @return float
     */
    public function getDealAmountDiscounted()
    {
      return $this->dealAmountDiscounted;
    }

    /**
     * @param float $dealAmountDiscounted
     * @return \Imper86\AllegroApi\Soap\Wsdl\DealsStruct
     */
    public function setDealAmountDiscounted($dealAmountDiscounted)
    {
      $this->dealAmountDiscounted = $dealAmountDiscounted;
      return $this;
    }

}
