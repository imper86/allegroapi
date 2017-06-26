<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class DoGetShipmentDataForRelatedItemsRequest
{

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var ArrayOfLong $itemIds
     */
    protected $itemIds = null;

    /**
     * @param string $sessionId
     * @param ArrayOfLong $itemIds
     */
    public function __construct($sessionId = null, $itemIds = null)
    {
      $this->sessionId = $sessionId;
      $this->itemIds = $itemIds;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
      return $this->sessionId;
    }

    /**
     * @param string $sessionId
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetShipmentDataForRelatedItemsRequest
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getItemIds()
    {
      return $this->itemIds;
    }

    /**
     * @param ArrayOfLong $itemIds
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetShipmentDataForRelatedItemsRequest
     */
    public function setItemIds($itemIds)
    {
      $this->itemIds = $itemIds;
      return $this;
    }

}
