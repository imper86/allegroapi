<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class SellRatingReasonSumStruct
{

    /**
     * @var string $sellRatingReasonTitle
     */
    protected $sellRatingReasonTitle = null;

    /**
     * @var int $sellRatingReasonCount
     */
    protected $sellRatingReasonCount = null;

    /**
     * @param string $sellRatingReasonTitle
     * @param int $sellRatingReasonCount
     */
    public function __construct($sellRatingReasonTitle = null, $sellRatingReasonCount = null)
    {
      $this->sellRatingReasonTitle = $sellRatingReasonTitle;
      $this->sellRatingReasonCount = $sellRatingReasonCount;
    }

    /**
     * @return string
     */
    public function getSellRatingReasonTitle()
    {
      return $this->sellRatingReasonTitle;
    }

    /**
     * @param string $sellRatingReasonTitle
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellRatingReasonSumStruct
     */
    public function setSellRatingReasonTitle($sellRatingReasonTitle)
    {
      $this->sellRatingReasonTitle = $sellRatingReasonTitle;
      return $this;
    }

    /**
     * @return int
     */
    public function getSellRatingReasonCount()
    {
      return $this->sellRatingReasonCount;
    }

    /**
     * @param int $sellRatingReasonCount
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellRatingReasonSumStruct
     */
    public function setSellRatingReasonCount($sellRatingReasonCount)
    {
      $this->sellRatingReasonCount = $sellRatingReasonCount;
      return $this;
    }

}
