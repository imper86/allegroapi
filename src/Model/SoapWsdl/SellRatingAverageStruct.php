<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class SellRatingAverageStruct
{

    /**
     * @var string $sellRatingGroupTitle
     */
    protected $sellRatingGroupTitle = null;

    /**
     * @var float $sellRatingGroupAverage
     */
    protected $sellRatingGroupAverage = null;

    /**
     * @param string $sellRatingGroupTitle
     * @param float $sellRatingGroupAverage
     */
    public function __construct($sellRatingGroupTitle = null, $sellRatingGroupAverage = null)
    {
      $this->sellRatingGroupTitle = $sellRatingGroupTitle;
      $this->sellRatingGroupAverage = $sellRatingGroupAverage;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\SellRatingAverageStruct
     */
    public function setSellRatingGroupTitle($sellRatingGroupTitle)
    {
      $this->sellRatingGroupTitle = $sellRatingGroupTitle;
      return $this;
    }

    /**
     * @return float
     */
    public function getSellRatingGroupAverage()
    {
      return $this->sellRatingGroupAverage;
    }

    /**
     * @param float $sellRatingGroupAverage
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\SellRatingAverageStruct
     */
    public function setSellRatingGroupAverage($sellRatingGroupAverage)
    {
      $this->sellRatingGroupAverage = $sellRatingGroupAverage;
      return $this;
    }

}
