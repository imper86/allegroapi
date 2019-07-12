<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class DoGetTransactionsIDsRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var ArrayOfLong $itemsIdArray
     */
    protected $itemsIdArray = null;

    /**
     * @var string $userRole
     */
    protected $userRole = null;

    /**
     * @var ArrayOfLong $shipmentIdArray
     */
    protected $shipmentIdArray = null;

    /**
     * @param string $sessionHandle
     * @param ArrayOfLong $itemsIdArray
     * @param string $userRole
     * @param ArrayOfLong $shipmentIdArray
     */
    public function __construct($sessionHandle = null, $itemsIdArray = null, $userRole = null, $shipmentIdArray = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->itemsIdArray = $itemsIdArray;
      $this->userRole = $userRole;
      $this->shipmentIdArray = $shipmentIdArray;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetTransactionsIDsRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getItemsIdArray()
    {
      return $this->itemsIdArray;
    }

    /**
     * @param ArrayOfLong $itemsIdArray
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetTransactionsIDsRequest
     */
    public function setItemsIdArray($itemsIdArray)
    {
      $this->itemsIdArray = $itemsIdArray;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserRole()
    {
      return $this->userRole;
    }

    /**
     * @param string $userRole
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetTransactionsIDsRequest
     */
    public function setUserRole($userRole)
    {
      $this->userRole = $userRole;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getShipmentIdArray()
    {
      return $this->shipmentIdArray;
    }

    /**
     * @param ArrayOfLong $shipmentIdArray
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetTransactionsIDsRequest
     */
    public function setShipmentIdArray($shipmentIdArray)
    {
      $this->shipmentIdArray = $shipmentIdArray;
      return $this;
    }

}
