<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class BlackListResStruct
{

    /**
     * @var int $userId
     */
    protected $userId = null;

    /**
     * @var int $result
     */
    protected $result = null;

    /**
     * @param int $userId
     * @param int $result
     */
    public function __construct($userId = null, $result = null)
    {
      $this->userId = $userId;
      $this->result = $result;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\BlackListResStruct
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
    }

    /**
     * @return int
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param int $result
     * @return \Imper86\AllegroApi\Soap\Wsdl\BlackListResStruct
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

}
