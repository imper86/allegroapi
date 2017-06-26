<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class DoMyAccount2Request
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var string $accountType
     */
    protected $accountType = null;

    /**
     * @var int $offset
     */
    protected $offset = null;

    /**
     * @var ArrayOfLong $itemsArray
     */
    protected $itemsArray = null;

    /**
     * @var int $limit
     */
    protected $limit = null;

    /**
     * @param string $sessionHandle
     * @param string $accountType
     * @param int $offset
     * @param ArrayOfLong $itemsArray
     * @param int $limit
     */
    public function __construct($sessionHandle = null, $accountType = null, $offset = null, $itemsArray = null, $limit = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->accountType = $accountType;
      $this->offset = $offset;
      $this->itemsArray = $itemsArray;
      $this->limit = $limit;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoMyAccount2Request
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountType()
    {
      return $this->accountType;
    }

    /**
     * @param string $accountType
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoMyAccount2Request
     */
    public function setAccountType($accountType)
    {
      $this->accountType = $accountType;
      return $this;
    }

    /**
     * @return int
     */
    public function getOffset()
    {
      return $this->offset;
    }

    /**
     * @param int $offset
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoMyAccount2Request
     */
    public function setOffset($offset)
    {
      $this->offset = $offset;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getItemsArray()
    {
      return $this->itemsArray;
    }

    /**
     * @param ArrayOfLong $itemsArray
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoMyAccount2Request
     */
    public function setItemsArray($itemsArray)
    {
      $this->itemsArray = $itemsArray;
      return $this;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
      return $this->limit;
    }

    /**
     * @param int $limit
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoMyAccount2Request
     */
    public function setLimit($limit)
    {
      $this->limit = $limit;
      return $this;
    }

}
