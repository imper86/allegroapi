<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class ShowUserFeedbacks
{

    /**
     * @var int $userFLastWeek
     */
    protected $userFLastWeek = null;

    /**
     * @var int $userFLastMonth
     */
    protected $userFLastMonth = null;

    /**
     * @var int $userFAll
     */
    protected $userFAll = null;

    /**
     * @var int $userFSoldItems
     */
    protected $userFSoldItems = null;

    /**
     * @var int $userFBuyItems
     */
    protected $userFBuyItems = null;

    /**
     * @param int $userFLastWeek
     * @param int $userFLastMonth
     * @param int $userFAll
     * @param int $userFSoldItems
     * @param int $userFBuyItems
     */
    public function __construct($userFLastWeek = null, $userFLastMonth = null, $userFAll = null, $userFSoldItems = null, $userFBuyItems = null)
    {
      $this->userFLastWeek = $userFLastWeek;
      $this->userFLastMonth = $userFLastMonth;
      $this->userFAll = $userFAll;
      $this->userFSoldItems = $userFSoldItems;
      $this->userFBuyItems = $userFBuyItems;
    }

    /**
     * @return int
     */
    public function getUserFLastWeek()
    {
      return $this->userFLastWeek;
    }

    /**
     * @param int $userFLastWeek
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\ShowUserFeedbacks
     */
    public function setUserFLastWeek($userFLastWeek)
    {
      $this->userFLastWeek = $userFLastWeek;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserFLastMonth()
    {
      return $this->userFLastMonth;
    }

    /**
     * @param int $userFLastMonth
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\ShowUserFeedbacks
     */
    public function setUserFLastMonth($userFLastMonth)
    {
      $this->userFLastMonth = $userFLastMonth;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserFAll()
    {
      return $this->userFAll;
    }

    /**
     * @param int $userFAll
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\ShowUserFeedbacks
     */
    public function setUserFAll($userFAll)
    {
      $this->userFAll = $userFAll;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserFSoldItems()
    {
      return $this->userFSoldItems;
    }

    /**
     * @param int $userFSoldItems
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\ShowUserFeedbacks
     */
    public function setUserFSoldItems($userFSoldItems)
    {
      $this->userFSoldItems = $userFSoldItems;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserFBuyItems()
    {
      return $this->userFBuyItems;
    }

    /**
     * @param int $userFBuyItems
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\ShowUserFeedbacks
     */
    public function setUserFBuyItems($userFBuyItems)
    {
      $this->userFBuyItems = $userFBuyItems;
      return $this;
    }

}
