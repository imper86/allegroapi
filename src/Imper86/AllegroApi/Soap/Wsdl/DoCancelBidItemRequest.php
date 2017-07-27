<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class DoCancelBidItemRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var int $cancelItemId
     */
    protected $cancelItemId = null;

    /**
     * @var ArrayOfInt $cancelBidsArray
     */
    protected $cancelBidsArray = null;

    /**
     * @var string $cancelBidsReason
     */
    protected $cancelBidsReason = null;

    /**
     * @var int $cancelAddToBlackList
     */
    protected $cancelAddToBlackList = null;

    /**
     * @param string $sessionHandle
     * @param int $cancelItemId
     * @param ArrayOfInt $cancelBidsArray
     * @param string $cancelBidsReason
     * @param int $cancelAddToBlackList
     */
    public function __construct($sessionHandle = null, $cancelItemId = null, $cancelBidsArray = null, $cancelBidsReason = null, $cancelAddToBlackList = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->cancelItemId = $cancelItemId;
      $this->cancelBidsArray = $cancelBidsArray;
      $this->cancelBidsReason = $cancelBidsReason;
      $this->cancelAddToBlackList = $cancelAddToBlackList;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoCancelBidItemRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
      return $this;
    }

    /**
     * @return int
     */
    public function getCancelItemId()
    {
      return $this->cancelItemId;
    }

    /**
     * @param int $cancelItemId
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoCancelBidItemRequest
     */
    public function setCancelItemId($cancelItemId)
    {
      $this->cancelItemId = $cancelItemId;
      return $this;
    }

    /**
     * @return ArrayOfInt
     */
    public function getCancelBidsArray()
    {
      return $this->cancelBidsArray;
    }

    /**
     * @param ArrayOfInt $cancelBidsArray
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoCancelBidItemRequest
     */
    public function setCancelBidsArray($cancelBidsArray)
    {
      $this->cancelBidsArray = $cancelBidsArray;
      return $this;
    }

    /**
     * @return string
     */
    public function getCancelBidsReason()
    {
      return $this->cancelBidsReason;
    }

    /**
     * @param string $cancelBidsReason
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoCancelBidItemRequest
     */
    public function setCancelBidsReason($cancelBidsReason)
    {
      $this->cancelBidsReason = $cancelBidsReason;
      return $this;
    }

    /**
     * @return int
     */
    public function getCancelAddToBlackList()
    {
      return $this->cancelAddToBlackList;
    }

    /**
     * @param int $cancelAddToBlackList
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoCancelBidItemRequest
     */
    public function setCancelAddToBlackList($cancelAddToBlackList)
    {
      $this->cancelAddToBlackList = $cancelAddToBlackList;
      return $this;
    }

}
