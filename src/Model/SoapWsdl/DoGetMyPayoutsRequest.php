<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class DoGetMyPayoutsRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var int $transCreateDateFrom
     */
    protected $transCreateDateFrom = null;

    /**
     * @var int $transCreateDateTo
     */
    protected $transCreateDateTo = null;

    /**
     * @var int $transPageLimit
     */
    protected $transPageLimit = null;

    /**
     * @var int $transOffset
     */
    protected $transOffset = null;

    /**
     * @param string $sessionHandle
     * @param int $transCreateDateFrom
     * @param int $transCreateDateTo
     * @param int $transPageLimit
     * @param int $transOffset
     */
    public function __construct($sessionHandle = null, $transCreateDateFrom = null, $transCreateDateTo = null, $transPageLimit = null, $transOffset = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->transCreateDateFrom = $transCreateDateFrom;
      $this->transCreateDateTo = $transCreateDateTo;
      $this->transPageLimit = $transPageLimit;
      $this->transOffset = $transOffset;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetMyPayoutsRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
      return $this;
    }

    /**
     * @return int
     */
    public function getTransCreateDateFrom()
    {
      return $this->transCreateDateFrom;
    }

    /**
     * @param int $transCreateDateFrom
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetMyPayoutsRequest
     */
    public function setTransCreateDateFrom($transCreateDateFrom)
    {
      $this->transCreateDateFrom = $transCreateDateFrom;
      return $this;
    }

    /**
     * @return int
     */
    public function getTransCreateDateTo()
    {
      return $this->transCreateDateTo;
    }

    /**
     * @param int $transCreateDateTo
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetMyPayoutsRequest
     */
    public function setTransCreateDateTo($transCreateDateTo)
    {
      $this->transCreateDateTo = $transCreateDateTo;
      return $this;
    }

    /**
     * @return int
     */
    public function getTransPageLimit()
    {
      return $this->transPageLimit;
    }

    /**
     * @param int $transPageLimit
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetMyPayoutsRequest
     */
    public function setTransPageLimit($transPageLimit)
    {
      $this->transPageLimit = $transPageLimit;
      return $this;
    }

    /**
     * @return int
     */
    public function getTransOffset()
    {
      return $this->transOffset;
    }

    /**
     * @param int $transOffset
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetMyPayoutsRequest
     */
    public function setTransOffset($transOffset)
    {
      $this->transOffset = $transOffset;
      return $this;
    }

}
