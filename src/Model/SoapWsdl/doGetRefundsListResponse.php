<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class doGetRefundsListResponse
{

    /**
     * @var int $refundsCount
     */
    protected $refundsCount = null;

    /**
     * @var ArrayOfRefundlisttype $refundsList
     */
    protected $refundsList = null;

    /**
     * @var ArrayOfFilterslisttype $filtersList
     */
    protected $filtersList = null;

    /**
     * @param int $refundsCount
     * @param ArrayOfRefundlisttype $refundsList
     * @param ArrayOfFilterslisttype $filtersList
     */
    public function __construct($refundsCount = null, $refundsList = null, $filtersList = null)
    {
      $this->refundsCount = $refundsCount;
      $this->refundsList = $refundsList;
      $this->filtersList = $filtersList;
    }

    /**
     * @return int
     */
    public function getRefundsCount()
    {
      return $this->refundsCount;
    }

    /**
     * @param int $refundsCount
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetRefundsListResponse
     */
    public function setRefundsCount($refundsCount)
    {
      $this->refundsCount = $refundsCount;
      return $this;
    }

    /**
     * @return ArrayOfRefundlisttype
     */
    public function getRefundsList()
    {
      return $this->refundsList;
    }

    /**
     * @param ArrayOfRefundlisttype $refundsList
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetRefundsListResponse
     */
    public function setRefundsList($refundsList)
    {
      $this->refundsList = $refundsList;
      return $this;
    }

    /**
     * @return ArrayOfFilterslisttype
     */
    public function getFiltersList()
    {
      return $this->filtersList;
    }

    /**
     * @param ArrayOfFilterslisttype $filtersList
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetRefundsListResponse
     */
    public function setFiltersList($filtersList)
    {
      $this->filtersList = $filtersList;
      return $this;
    }

}
