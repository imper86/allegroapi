<?php

namespace Imper69\AllegroApi\Soap\Wsdl;

class UserBlackListStruct
{

    /**
     * @var int $userId
     */
    protected $userId = null;

    /**
     * @var string $userBlackListNote
     */
    protected $userBlackListNote = null;

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
     * @return \Imper69\AllegroApi\Soap\Wsdl\UserBlackListStruct
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserBlackListNote()
    {
      return $this->userBlackListNote;
    }

    /**
     * @param string $userBlackListNote
     * @return \Imper69\AllegroApi\Soap\Wsdl\UserBlackListStruct
     */
    public function setUserBlackListNote($userBlackListNote)
    {
      $this->userBlackListNote = $userBlackListNote;
      return $this;
    }

}
