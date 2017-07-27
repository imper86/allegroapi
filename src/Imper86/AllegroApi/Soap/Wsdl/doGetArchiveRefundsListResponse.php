<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class doGetArchiveRefundsListResponse
{

    /**
     * @var int $refundsCount
     */
    protected $refundsCount = null;

    /**
     * @var ArrayOfArchiverefundslisttypestruct $refundsList
     */
    protected $refundsList = null;

    /**
     * @param int $refundsCount
     * @param ArrayOfArchiverefundslisttypestruct $refundsList
     */
    public function __construct($refundsCount = null, $refundsList = null)
    {
      $this->refundsCount = $refundsCount;
      $this->refundsList = $refundsList;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetArchiveRefundsListResponse
     */
    public function setRefundsCount($refundsCount)
    {
      $this->refundsCount = $refundsCount;
      return $this;
    }

    /**
     * @return ArrayOfArchiverefundslisttypestruct
     */
    public function getRefundsList()
    {
      return $this->refundsList;
    }

    /**
     * @param ArrayOfArchiverefundslisttypestruct $refundsList
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetArchiveRefundsListResponse
     */
    public function setRefundsList($refundsList)
    {
      $this->refundsList = $refundsList;
      return $this;
    }

}
