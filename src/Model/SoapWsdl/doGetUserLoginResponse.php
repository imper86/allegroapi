<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class doGetUserLoginResponse
{

    /**
     * @var string $userLogin
     */
    protected $userLogin = null;

    /**
     * @param string $userLogin
     */
    public function __construct($userLogin = null)
    {
      $this->userLogin = $userLogin;
    }

    /**
     * @return string
     */
    public function getUserLogin()
    {
      return $this->userLogin;
    }

    /**
     * @param string $userLogin
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetUserLoginResponse
     */
    public function setUserLogin($userLogin)
    {
      $this->userLogin = $userLogin;
      return $this;
    }

}
