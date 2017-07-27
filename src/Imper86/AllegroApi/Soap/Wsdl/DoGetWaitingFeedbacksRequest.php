<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class DoGetWaitingFeedbacksRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var int $offset
     */
    protected $offset = null;

    /**
     * @var int $packageSize
     */
    protected $packageSize = null;

    /**
     * @param string $sessionHandle
     * @param int $offset
     * @param int $packageSize
     */
    public function __construct($sessionHandle = null, $offset = null, $packageSize = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->offset = $offset;
      $this->packageSize = $packageSize;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetWaitingFeedbacksRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetWaitingFeedbacksRequest
     */
    public function setOffset($offset)
    {
      $this->offset = $offset;
      return $this;
    }

    /**
     * @return int
     */
    public function getPackageSize()
    {
      return $this->packageSize;
    }

    /**
     * @param int $packageSize
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetWaitingFeedbacksRequest
     */
    public function setPackageSize($packageSize)
    {
      $this->packageSize = $packageSize;
      return $this;
    }

}
