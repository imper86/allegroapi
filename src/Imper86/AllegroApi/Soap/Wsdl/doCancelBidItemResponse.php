<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class doCancelBidItemResponse
{

    /**
     * @var int $cancelBidValue
     */
    protected $cancelBidValue = null;

    /**
     * @var ArrayOfInt $cancelledBids
     */
    protected $cancelledBids = null;

    /**
     * @var ArrayOfInt $notCancelledBids
     */
    protected $notCancelledBids = null;

    /**
     * @param int $cancelBidValue
     * @param ArrayOfInt $cancelledBids
     * @param ArrayOfInt $notCancelledBids
     */
    public function __construct($cancelBidValue = null, $cancelledBids = null, $notCancelledBids = null)
    {
      $this->cancelBidValue = $cancelBidValue;
      $this->cancelledBids = $cancelledBids;
      $this->notCancelledBids = $notCancelledBids;
    }

    /**
     * @return int
     */
    public function getCancelBidValue()
    {
      return $this->cancelBidValue;
    }

    /**
     * @param int $cancelBidValue
     * @return \Imper86\AllegroApi\Soap\Wsdl\doCancelBidItemResponse
     */
    public function setCancelBidValue($cancelBidValue)
    {
      $this->cancelBidValue = $cancelBidValue;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getCancelledBids()
    {
      return $this->cancelledBids;
    }

    /**
     * @param ArrayOfInt $cancelledBids
     * @return \Imper86\AllegroApi\Soap\Wsdl\doCancelBidItemResponse
     */
    public function setCancelledBids($cancelledBids)
    {
      $this->cancelledBids = $cancelledBids;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getNotCancelledBids()
    {
      return $this->notCancelledBids;
    }

    /**
     * @param ArrayOfInt $notCancelledBids
     * @return \Imper86\AllegroApi\Soap\Wsdl\doCancelBidItemResponse
     */
    public function setNotCancelledBids($notCancelledBids)
    {
      $this->notCancelledBids = $notCancelledBids;
      return $this;
    }

}
