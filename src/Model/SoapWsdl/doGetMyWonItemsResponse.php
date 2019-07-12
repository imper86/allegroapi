<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetMyWonItemsResponse
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetMyWonItemsResponse
     */
    public function setWonItemsList($wonItemsList)
    {
      $this->wonItemsList = $wonItemsList;
      return $this;
    }

}
