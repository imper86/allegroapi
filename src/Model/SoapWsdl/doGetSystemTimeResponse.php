<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class doGetSystemTimeResponse
{

    /**
     * @var int $serverTime
     */
    protected $serverTime = null;

    /**
     * @param int $serverTime
     */
    public function __construct($serverTime = null)
    {
      $this->serverTime = $serverTime;
    }

    /**
     * @return int
     */
    public function getServerTime()
    {
      return $this->serverTime;
    }

    /**
     * @param int $serverTime
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetSystemTimeResponse
     */
    public function setServerTime($serverTime)
    {
      $this->serverTime = $serverTime;
      return $this;
    }

}
