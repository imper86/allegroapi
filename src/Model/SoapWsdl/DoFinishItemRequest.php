<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class DoFinishItemRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var int $finishItemId
     */
    protected $finishItemId = null;

    /**
     * @var int $finishCancelAllBids
     */
    protected $finishCancelAllBids = null;

    /**
     * @var string $finishCancelReason
     */
    protected $finishCancelReason = null;

    /**
     * @param string $sessionHandle
     * @param int $finishItemId
     * @param int $finishCancelAllBids
     * @param string $finishCancelReason
     */
    public function __construct($sessionHandle = null, $finishItemId = null, $finishCancelAllBids = null, $finishCancelReason = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->finishItemId = $finishItemId;
      $this->finishCancelAllBids = $finishCancelAllBids;
      $this->finishCancelReason = $finishCancelReason;
    }

    /**
     * @return string
     */
    public function getSessionHandle()
    {
      return $this->sessionHandle;
    }

    /**
     * @param string $sessionHandle
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoFinishItemRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
      return $this;
    }

    /**
     * @return int
     */
    public function getFinishItemId()
    {
      return $this->finishItemId;
    }

    /**
     * @param int $finishItemId
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoFinishItemRequest
     */
    public function setFinishItemId($finishItemId)
    {
      $this->finishItemId = $finishItemId;
      return $this;
    }

    /**
     * @return int
     */
    public function getFinishCancelAllBids()
    {
      return $this->finishCancelAllBids;
    }

    /**
     * @param int $finishCancelAllBids
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoFinishItemRequest
     */
    public function setFinishCancelAllBids($finishCancelAllBids)
    {
      $this->finishCancelAllBids = $finishCancelAllBids;
      return $this;
    }

    /**
     * @return string
     */
    public function getFinishCancelReason()
    {
      return $this->finishCancelReason;
    }

    /**
     * @param string $finishCancelReason
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoFinishItemRequest
     */
    public function setFinishCancelReason($finishCancelReason)
    {
      $this->finishCancelReason = $finishCancelReason;
      return $this;
    }

}
