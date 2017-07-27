<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class SellRatingDetailStruct
{

    /**
     * @var string $sellRatingGroupTitle
     */
    protected $sellRatingGroupTitle = null;

    /**
     * @var ArrayOfSellratingreasonsumstruct $sellRatingReasonsSummary
     */
    protected $sellRatingReasonsSummary = null;

    /**
     * @param string $sellRatingGroupTitle
     */
    public function __construct($sellRatingGroupTitle = null)
    {
      $this->sellRatingGroupTitle = $sellRatingGroupTitle;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellRatingDetailStruct
     */
    public function setSellRatingGroupTitle($sellRatingGroupTitle)
    {
      $this->sellRatingGroupTitle = $sellRatingGroupTitle;
      return $this;
    }

    /**
     * @return ArrayOfSellratingreasonsumstruct
     */
    public function getSellRatingReasonsSummary()
    {
      return $this->sellRatingReasonsSummary;
    }

    /**
     * @param ArrayOfSellratingreasonsumstruct $sellRatingReasonsSummary
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellRatingDetailStruct
     */
    public function setSellRatingReasonsSummary($sellRatingReasonsSummary)
    {
      $this->sellRatingReasonsSummary = $sellRatingReasonsSummary;
      return $this;
    }

}
