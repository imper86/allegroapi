<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class doGetMyFutureItemsResponse
{

    /**
     * @var int $futureItemsCounter
     */
    protected $futureItemsCounter = null;

    /**
     * @var ArrayOfFutureitemstruct $futureItemsList
     */
    protected $futureItemsList = null;

    /**
     * @param int $futureItemsCounter
     * @param ArrayOfFutureitemstruct $futureItemsList
     */
    public function __construct($futureItemsCounter = null, $futureItemsList = null)
    {
      $this->futureItemsCounter = $futureItemsCounter;
      $this->futureItemsList = $futureItemsList;
    }

    /**
     * @return int
     */
    public function getFutureItemsCounter()
    {
      return $this->futureItemsCounter;
    }

    /**
     * @param int $futureItemsCounter
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetMyFutureItemsResponse
     */
    public function setFutureItemsCounter($futureItemsCounter)
    {
      $this->futureItemsCounter = $futureItemsCounter;
      return $this;
    }

    /**
     * @return ArrayOfFutureitemstruct
     */
    public function getFutureItemsList()
    {
      return $this->futureItemsList;
    }

    /**
     * @param ArrayOfFutureitemstruct $futureItemsList
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetMyFutureItemsResponse
     */
    public function setFutureItemsList($futureItemsList)
    {
      $this->futureItemsList = $futureItemsList;
      return $this;
    }

}
