<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class doGetMyNotWonItemsResponse
{

    /**
     * @var int $notWonItemsCounter
     */
    protected $notWonItemsCounter = null;

    /**
     * @var ArrayOfNotwonitemstruct $notWonItemsList
     */
    protected $notWonItemsList = null;

    /**
     * @param int $notWonItemsCounter
     * @param ArrayOfNotwonitemstruct $notWonItemsList
     */
    public function __construct($notWonItemsCounter = null, $notWonItemsList = null)
    {
      $this->notWonItemsCounter = $notWonItemsCounter;
      $this->notWonItemsList = $notWonItemsList;
    }

    /**
     * @return int
     */
    public function getNotWonItemsCounter()
    {
      return $this->notWonItemsCounter;
    }

    /**
     * @param int $notWonItemsCounter
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetMyNotWonItemsResponse
     */
    public function setNotWonItemsCounter($notWonItemsCounter)
    {
      $this->notWonItemsCounter = $notWonItemsCounter;
      return $this;
    }

    /**
     * @return ArrayOfNotwonitemstruct
     */
    public function getNotWonItemsList()
    {
      return $this->notWonItemsList;
    }

    /**
     * @param ArrayOfNotwonitemstruct $notWonItemsList
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetMyNotWonItemsResponse
     */
    public function setNotWonItemsList($notWonItemsList)
    {
      $this->notWonItemsList = $notWonItemsList;
      return $this;
    }

}
