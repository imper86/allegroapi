<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class UserInfoType
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
     * @var int $countryId
     */
    protected $countryId = null;

    /**
     * @param int $userId
     * @param string $userLogin
     * @param int $userRating
     * @param int $userIcons
     * @param int $countryId
     */
    public function __construct($userId = null, $userLogin = null, $userRating = null, $userIcons = null, $countryId = null)
    {
      $this->userId = $userId;
      $this->userLogin = $userLogin;
      $this->userRating = $userRating;
      $this->userIcons = $userIcons;
      $this->countryId = $countryId;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\UserInfoType
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\UserInfoType
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\UserInfoType
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\UserInfoType
     */
    public function setUserIcons($userIcons)
    {
      $this->userIcons = $userIcons;
      return $this;
    }

    /**
     * @return int
     */
    public function getCountryId()
    {
      return $this->countryId;
    }

    /**
     * @param int $countryId
     * @return \Imper86\AllegroApi\Soap\Wsdl\UserInfoType
     */
    public function setCountryId($countryId)
    {
      $this->countryId = $countryId;
      return $this;
    }

}
