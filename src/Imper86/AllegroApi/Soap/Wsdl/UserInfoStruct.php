<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class UserInfoStruct
{

    /**
     * @var int $userId
     */
    protected $userId = null;

    /**
     * @var string $userLogin
     */
    protected $userLogin = null;

    /**
     * @var int $userRating
     */
    protected $userRating = null;

    /**
     * @var int $userIcons
     */
    protected $userIcons = null;

    /**
     * @var int $userCountry
     */
    protected $userCountry = null;

    /**
     * @param int $userId
     * @param string $userLogin
     * @param int $userRating
     * @param int $userIcons
     * @param int $userCountry
     */
    public function __construct($userId = null, $userLogin = null, $userRating = null, $userIcons = null, $userCountry = null)
    {
      $this->userId = $userId;
      $this->userLogin = $userLogin;
      $this->userRating = $userRating;
      $this->userIcons = $userIcons;
      $this->userCountry = $userCountry;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\UserInfoStruct
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\UserInfoStruct
     */
    public function setUserLogin($userLogin)
    {
      $this->userLogin = $userLogin;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserRating()
    {
      return $this->userRating;
    }

    /**
     * @param int $userRating
     * @return \Imper86\AllegroApi\Soap\Wsdl\UserInfoStruct
     */
    public function setUserRating($userRating)
    {
      $this->userRating = $userRating;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserIcons()
    {
      return $this->userIcons;
    }

    /**
     * @param int $userIcons
     * @return \Imper86\AllegroApi\Soap\Wsdl\UserInfoStruct
     */
    public function setUserIcons($userIcons)
    {
      $this->userIcons = $userIcons;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserCountry()
    {
      return $this->userCountry;
    }

    /**
     * @param int $userCountry
     * @return \Imper86\AllegroApi\Soap\Wsdl\UserInfoStruct
     */
    public function setUserCountry($userCountry)
    {
      $this->userCountry = $userCountry;
      return $this;
    }

}
