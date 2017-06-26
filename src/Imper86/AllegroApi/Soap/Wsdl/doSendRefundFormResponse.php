<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class doSendRefundFormResponse
{

    /**
     * @var int $refundId
     */
    protected $refundId = null;

    /**
     * @param int $refundId
     */
    public function __construct($refundId = null)
    {
      $this->refundId = $refundId;
    }

    /**
     * @return int
     */
    public function getRefundId()
    {
      return $this->refundId;
    }

    /**
     * @param int $refundId
     * @return \Imper86\AllegroApi\Soap\Wsdl\doSendRefundFormResponse
     */
    public function setRefundId($refundId)
    {
      $this->refundId = $refundId;
      return $this;
    }

}
