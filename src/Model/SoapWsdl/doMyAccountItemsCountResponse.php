<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class doMyAccountItemsCountResponse
{

    /**
     * @var int $myaccountItemsCount
     */
    protected $myaccountItemsCount = null;

    /**
     * @param int $myaccountItemsCount
     */
    public function __construct($myaccountItemsCount = null)
    {
      $this->myaccountItemsCount = $myaccountItemsCount;
    }

    /**
     * @return int
     */
    public function getMyaccountItemsCount()
    {
      return $this->myaccountItemsCount;
    }

    /**
     * @param int $myaccountItemsCount
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doMyAccountItemsCountResponse
     */
    public function setMyaccountItemsCount($myaccountItemsCount)
    {
      $this->myaccountItemsCount = $myaccountItemsCount;
      return $this;
    }

}
