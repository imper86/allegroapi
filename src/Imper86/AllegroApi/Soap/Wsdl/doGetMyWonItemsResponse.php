<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class doGetMyWonItemsResponse
{

    /**
     * @var int $wonItemsCounter
     */
    protected $wonItemsCounter = null;

    /**
     * @var ArrayOfWonitemstruct $wonItemsList
     */
    protected $wonItemsList = null;

    /**
     * @param int $wonItemsCounter
     * @param ArrayOfWonitemstruct $wonItemsList
     */
    public function __construct($wonItemsCounter = null, $wonItemsList = null)
    {
      $this->wonItemsCounter = $wonItemsCounter;
      $this->wonItemsList = $wonItemsList;
    }

    /**
     * @return int
     */
    public function getWonItemsCounter()
    {
      return $this->wonItemsCounter;
    }

    /**
     * @param int $wonItemsCounter
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetMyWonItemsResponse
     */
    public function setWonItemsCounter($wonItemsCounter)
    {
      $this->wonItemsCounter = $wonItemsCounter;
      return $this;
    }

    /**
     * @return ArrayOfWonitemstruct
     */
    public function getWonItemsList()
    {
      return $this->wonItemsList;
    }

    /**
     * @param ArrayOfWonitemstruct $wonItemsList
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetMyWonItemsResponse
     */
    public function setWonItemsList($wonItemsList)
    {
      $this->wonItemsList = $wonItemsList;
      return $this;
    }

}
