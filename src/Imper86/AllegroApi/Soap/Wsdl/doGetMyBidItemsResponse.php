<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class doGetMyBidItemsResponse
{

    /**
     * @var int $bidItemsCounter
     */
    protected $bidItemsCounter = null;

    /**
     * @var ArrayOfBiditemstruct $bidItemsList
     */
    protected $bidItemsList = null;

    /**
     * @param int $bidItemsCounter
     * @param ArrayOfBiditemstruct $bidItemsList
     */
    public function __construct($bidItemsCounter = null, $bidItemsList = null)
    {
      $this->bidItemsCounter = $bidItemsCounter;
      $this->bidItemsList = $bidItemsList;
    }

    /**
     * @return int
     */
    public function getBidItemsCounter()
    {
      return $this->bidItemsCounter;
    }

    /**
     * @param int $bidItemsCounter
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetMyBidItemsResponse
     */
    public function setBidItemsCounter($bidItemsCounter)
    {
      $this->bidItemsCounter = $bidItemsCounter;
      return $this;
    }

    /**
     * @return ArrayOfBiditemstruct
     */
    public function getBidItemsList()
    {
      return $this->bidItemsList;
    }

    /**
     * @param ArrayOfBiditemstruct $bidItemsList
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetMyBidItemsResponse
     */
    public function setBidItemsList($bidItemsList)
    {
      $this->bidItemsList = $bidItemsList;
      return $this;
    }

}
