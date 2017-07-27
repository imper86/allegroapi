<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class SellRatingEstimationStruct
{

    /**
     * @var int $sellRatingGroupId
     */
    protected $sellRatingGroupId = null;

    /**
     * @var int $sellRatingGroupEstimation
     */
    protected $sellRatingGroupEstimation = null;

    /**
     * @var int $sellRatingReasonId
     */
    protected $sellRatingReasonId = null;

    /**
     * @param int $sellRatingGroupId
     * @param int $sellRatingGroupEstimation
     */
    public function __construct($sellRatingGroupId = null, $sellRatingGroupEstimation = null)
    {
      $this->sellRatingGroupId = $sellRatingGroupId;
      $this->sellRatingGroupEstimation = $sellRatingGroupEstimation;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellRatingEstimationStruct
     */
    public function setSellRatingGroupId($sellRatingGroupId)
    {
      $this->sellRatingGroupId = $sellRatingGroupId;
      return $this;
    }

    /**
     * @return int
     */
    public function getSellRatingGroupEstimation()
    {
      return $this->sellRatingGroupEstimation;
    }

    /**
     * @param int $sellRatingGroupEstimation
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellRatingEstimationStruct
     */
    public function setSellRatingGroupEstimation($sellRatingGroupEstimation)
    {
      $this->sellRatingGroupEstimation = $sellRatingGroupEstimation;
      return $this;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellRatingEstimationStruct
     */
    public function setSellRatingReasonId($sellRatingReasonId)
    {
      $this->sellRatingReasonId = $sellRatingReasonId;
      return $this;
    }

}
