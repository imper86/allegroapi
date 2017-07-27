<?php

namespace Imper69\AllegroApi\Soap\Wsdl;

class doGetSellRatingReasonsResponse
{

    /**
     * @var ArrayOfSellratinginfostruct $sellRatingInfo
     */
    protected $sellRatingInfo = null;

    /**
     * @param ArrayOfSellratinginfostruct $sellRatingInfo
     */
    public function __construct($sellRatingInfo = null)
    {
      $this->sellRatingInfo = $sellRatingInfo;
    }

    /**
     * @return ArrayOfSellratinginfostruct
     */
    public function getSellRatingInfo()
    {
      return $this->sellRatingInfo;
    }

    /**
     * @param ArrayOfSellratinginfostruct $sellRatingInfo
     * @return \Imper69\AllegroApi\Soap\Wsdl\doGetSellRatingReasonsResponse
     */
    public function setSellRatingInfo($sellRatingInfo)
    {
      $this->sellRatingInfo = $sellRatingInfo;
      return $this;
    }

}
