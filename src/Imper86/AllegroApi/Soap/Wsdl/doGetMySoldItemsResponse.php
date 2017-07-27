<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class doGetMySoldItemsResponse
{

    /**
     * @var int $soldItemsCounter
     */
    protected $soldItemsCounter = null;

    /**
     * @var ArrayOfSolditemstruct $soldItemsList
     */
    protected $soldItemsList = null;

    /**
     * @param int $soldItemsCounter
     * @param ArrayOfSolditemstruct $soldItemsList
     */
    public function __construct($soldItemsCounter = null, $soldItemsList = null)
    {
      $this->soldItemsCounter = $soldItemsCounter;
      $this->soldItemsList = $soldItemsList;
    }

    /**
     * @return int
     */
    public function getSoldItemsCounter()
    {
      return $this->soldItemsCounter;
    }

    /**
     * @param int $soldItemsCounter
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetMySoldItemsResponse
     */
    public function setSoldItemsCounter($soldItemsCounter)
    {
      $this->soldItemsCounter = $soldItemsCounter;
      return $this;
    }

    /**
     * @return ArrayOfSolditemstruct
     */
    public function getSoldItemsList()
    {
      return $this->soldItemsList;
    }

    /**
     * @param ArrayOfSolditemstruct $soldItemsList
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetMySoldItemsResponse
     */
    public function setSoldItemsList($soldItemsList)
    {
      $this->soldItemsList = $soldItemsList;
      return $this;
    }

}
