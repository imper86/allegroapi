<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class doGetDealsResponse
{

    /**
     * @var ArrayOfDealsstruct $dealsList
     */
    protected $dealsList = null;

    /**
     * @param ArrayOfDealsstruct $dealsList
     */
    public function __construct($dealsList = null)
    {
      $this->dealsList = $dealsList;
    }

    /**
     * @return ArrayOfDealsstruct
     */
    public function getDealsList()
    {
      return $this->dealsList;
    }

    /**
     * @param ArrayOfDealsstruct $dealsList
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetDealsResponse
     */
    public function setDealsList($dealsList)
    {
      $this->dealsList = $dealsList;
      return $this;
    }

}
