<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class doGetUserIDResponse
{

    /**
     * @var int $userId
     */
    protected $userId = null;

    /**
     * @param int $userId
     */
    public function __construct($userId = null)
    {
      $this->userId = $userId;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetUserIDResponse
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
    }

}
