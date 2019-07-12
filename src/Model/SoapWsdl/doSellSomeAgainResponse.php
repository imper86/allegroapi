<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class doSellSomeAgainResponse
{

    /**
     * @var ArrayOfStructsellagain $itemsSellAgain
     */
    protected $itemsSellAgain = null;

    /**
     * @var ArrayOfStructsellfailed $itemsSellFailed
     */
    protected $itemsSellFailed = null;

    /**
     * @var ArrayOfLong $itemsSellNotFound
     */
    protected $itemsSellNotFound = null;

    /**
     * @param ArrayOfStructsellagain $itemsSellAgain
     * @param ArrayOfStructsellfailed $itemsSellFailed
     * @param ArrayOfLong $itemsSellNotFound
     */
    public function __construct($itemsSellAgain = null, $itemsSellFailed = null, $itemsSellNotFound = null)
    {
      $this->itemsSellAgain = $itemsSellAgain;
      $this->itemsSellFailed = $itemsSellFailed;
      $this->itemsSellNotFound = $itemsSellNotFound;
    }

    /**
     * @return ArrayOfStructsellagain
     */
    public function getItemsSellAgain()
    {
      return $this->itemsSellAgain;
    }

    /**
     * @param ArrayOfStructsellagain $itemsSellAgain
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doSellSomeAgainResponse
     */
    public function setItemsSellAgain($itemsSellAgain)
    {
      $this->itemsSellAgain = $itemsSellAgain;
      return $this;
    }

    /**
     * @return ArrayOfStructsellfailed
     */
    public function getItemsSellFailed()
    {
      return $this->itemsSellFailed;
    }

    /**
     * @param ArrayOfStructsellfailed $itemsSellFailed
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doSellSomeAgainResponse
     */
    public function setItemsSellFailed($itemsSellFailed)
    {
      $this->itemsSellFailed = $itemsSellFailed;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getItemsSellNotFound()
    {
      return $this->itemsSellNotFound;
    }

    /**
     * @param ArrayOfLong $itemsSellNotFound
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doSellSomeAgainResponse
     */
    public function setItemsSellNotFound($itemsSellNotFound)
    {
      $this->itemsSellNotFound = $itemsSellNotFound;
      return $this;
    }

}
