<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class SellRatingInfoStruct
{

    /**
     * @var int $sellRatingGroupId
     */
    protected $sellRatingGroupId = null;

    /**
     * @var string $sellRatingGroupTitle
     */
    protected $sellRatingGroupTitle = null;

    /**
     * @var ArrayOfSellratingreasonstruct $sellRatingReasons
     */
    protected $sellRatingReasons = null;

    /**
     * @param int $sellRatingGroupId
     * @param string $sellRatingGroupTitle
     */
    public function __construct($sellRatingGroupId = null, $sellRatingGroupTitle = null)
    {
      $this->sellRatingGroupId = $sellRatingGroupId;
      $this->sellRatingGroupTitle = $sellRatingGroupTitle;
    }

    /**
     * @return int
     */
    public function getSellRatingGroupId()
    {
      return $this->sellRatingGroupId;
    }

    /**
     * @param int $sellRatingGroupId
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellRatingInfoStruct
     */
    public function setSellRatingGroupId($sellRatingGroupId)
    {
      $this->sellRatingGroupId = $sellRatingGroupId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellRatingGroupTitle()
    {
      return $this->sellRatingGroupTitle;
    }

    /**
     * @param string $sellRatingGroupTitle
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellRatingInfoStruct
     */
    public function setSellRatingGroupTitle($sellRatingGroupTitle)
    {
      $this->sellRatingGroupTitle = $sellRatingGroupTitle;
      return $this;
    }

    /**
     * @return ArrayOfSellratingreasonstruct
     */
    public function getSellRatingReasons()
    {
      return $this->sellRatingReasons;
    }

    /**
     * @param ArrayOfSellratingreasonstruct $sellRatingReasons
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellRatingInfoStruct
     */
    public function setSellRatingReasons($sellRatingReasons)
    {
      $this->sellRatingReasons = $sellRatingReasons;
      return $this;
    }

}
