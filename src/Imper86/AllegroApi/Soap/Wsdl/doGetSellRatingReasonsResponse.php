<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

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
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetSellRatingReasonsResponse
     */
    public function setSellRatingInfo($sellRatingInfo)
    {
      $this->sellRatingInfo = $sellRatingInfo;
      return $this;
    }

}
