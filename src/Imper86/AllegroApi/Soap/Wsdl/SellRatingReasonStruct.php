<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class SellRatingReasonStruct
{

    /**
     * @var int $sellRatingReasonId
     */
    protected $sellRatingReasonId = null;

    /**
     * @var string $sellRatingReasonTitle
     */
    protected $sellRatingReasonTitle = null;

    /**
     * @param int $sellRatingReasonId
     * @param string $sellRatingReasonTitle
     */
    public function __construct($sellRatingReasonId = null, $sellRatingReasonTitle = null)
    {
      $this->sellRatingReasonId = $sellRatingReasonId;
      $this->sellRatingReasonTitle = $sellRatingReasonTitle;
    }

    /**
     * @return int
     */
    public function getSellRatingReasonId()
    {
      return $this->sellRatingReasonId;
    }

    /**
     * @param int $sellRatingReasonId
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellRatingReasonStruct
     */
    public function setSellRatingReasonId($sellRatingReasonId)
    {
      $this->sellRatingReasonId = $sellRatingReasonId;
      return $this;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellRatingReasonStruct
     */
    public function setSellRatingReasonTitle($sellRatingReasonTitle)
    {
      $this->sellRatingReasonTitle = $sellRatingReasonTitle;
      return $this;
    }

}
