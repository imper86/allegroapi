<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class doGetBlackListUsersResponse
{

    /**
     * @var ArrayOfBlackliststruct $blackListUsers
     */
    protected $blackListUsers = null;

    /**
     * @param ArrayOfBlackliststruct $blackListUsers
     */
    public function __construct($blackListUsers = null)
    {
      $this->blackListUsers = $blackListUsers;
    }

    /**
     * @return ArrayOfBlackliststruct
     */
    public function getBlackListUsers()
    {
      return $this->blackListUsers;
    }

    /**
     * @param ArrayOfBlackliststruct $blackListUsers
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetBlackListUsersResponse
     */
    public function setBlackListUsers($blackListUsers)
    {
      $this->blackListUsers = $blackListUsers;
      return $this;
    }

}
