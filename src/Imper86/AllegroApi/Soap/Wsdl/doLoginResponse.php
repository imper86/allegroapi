<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class doLoginResponse
{

    /**
     * @var string $sessionHandlePart
     */
    protected $sessionHandlePart = null;

    /**
     * @var int $userId
     */
    protected $userId = null;

    /**
     * @var int $serverTime
     */
    protected $serverTime = null;

    /**
     * @param string $sessionHandlePart
     * @param int $userId
     * @param int $serverTime
     */
    public function __construct($sessionHandlePart = null, $userId = null, $serverTime = null)
    {
      $this->sessionHandlePart = $sessionHandlePart;
      $this->userId = $userId;
      $this->serverTime = $serverTime;
    }

    /**
     * @return string
     */
    public function getSessionHandlePart()
    {
      return $this->sessionHandlePart;
    }

    /**
     * @param string $sessionHandlePart
     * @return \Imper86\AllegroApi\Soap\Wsdl\doLoginResponse
     */
    public function setSessionHandlePart($sessionHandlePart)
    {
      $this->sessionHandlePart = $sessionHandlePart;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserId()
    {
      return $this->userId;
    }

    /**
     * @param int $userId
     * @return \Imper86\AllegroApi\Soap\Wsdl\doLoginResponse
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\doLoginResponse
     */
    public function setServerTime($serverTime)
    {
      $this->serverTime = $serverTime;
      return $this;
    }

}
