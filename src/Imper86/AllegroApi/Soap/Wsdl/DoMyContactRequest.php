<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class DoMyContactRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var ArrayOfLong $auctionIdList
     */
    protected $auctionIdList = null;

    /**
     * @var int $offset
     */
    protected $offset = null;

    /**
     * @var int $desc
     */
    protected $desc = null;

    /**
     * @param string $sessionHandle
     * @param ArrayOfLong $auctionIdList
     * @param int $offset
     * @param int $desc
     */
    public function __construct($sessionHandle = null, $auctionIdList = null, $offset = null, $desc = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->auctionIdList = $auctionIdList;
      $this->offset = $offset;
      $this->desc = $desc;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoMyContactRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getAuctionIdList()
    {
      return $this->auctionIdList;
    }

    /**
     * @param ArrayOfLong $auctionIdList
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoMyContactRequest
     */
    public function setAuctionIdList($auctionIdList)
    {
      $this->auctionIdList = $auctionIdList;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoMyContactRequest
     */
    public function setOffset($offset)
    {
      $this->offset = $offset;
      return $this;
    }

    /**
     * @return int
     */
    public function getDesc()
    {
      return $this->desc;
    }

    /**
     * @param int $desc
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoMyContactRequest
     */
    public function setDesc($desc)
    {
      $this->desc = $desc;
      return $this;
    }

}
