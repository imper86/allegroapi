<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class doShowUserResponse
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
     * @var int $userCountry
     */
    protected $userCountry = null;

    /**
     * @var int $userCreateDate
     */
    protected $userCreateDate = null;

    /**
     * @var int $userLoginDate
     */
    protected $userLoginDate = null;

    /**
     * @var int $userRating
     */
    protected $userRating = null;

    /**
     * @var int $userIsNewUser
     */
    protected $userIsNewUser = null;

    /**
     * @var int $userNotActivated
     */
    protected $userNotActivated = null;

    /**
     * @var int $userClosed
     */
    protected $userClosed = null;

    /**
     * @var int $userBlocked
     */
    protected $userBlocked = null;

    /**
     * @var int $userTerminated
     */
    protected $userTerminated = null;

    /**
     * @var int $userHasPage
     */
    protected $userHasPage = null;

    /**
     * @var int $userIsSseller
     */
    protected $userIsSseller = null;

    /**
     * @var int $userIsEco
     */
    protected $userIsEco = null;

    /**
     * @var ShowUserFeedbacks $userPositiveFeedback
     */
    protected $userPositiveFeedback = null;

    /**
     * @var ShowUserFeedbacks $userNegativeFeedback
     */
    protected $userNegativeFeedback = null;

    /**
     * @var ShowUserFeedbacks $userNeutralFeedback
     */
    protected $userNeutralFeedback = null;

    /**
     * @var int $userJuniorStatus
     */
    protected $userJuniorStatus = null;

    /**
     * @var int $userHasShop
     */
    protected $userHasShop = null;

    /**
     * @var int $userCompanyIcon
     */
    protected $userCompanyIcon = null;

    /**
     * @var int $userSellRatingCount
     */
    protected $userSellRatingCount = null;

    /**
     * @var ArrayOfSellratingaveragestruct $userSellRatingAverage
     */
    protected $userSellRatingAverage = null;

    /**
     * @var int $userIsAllegroStandard
     */
    protected $userIsAllegroStandard = null;

    /**
     * @var int $userIsB2cSeller
     */
    protected $userIsB2cSeller = null;

    /**
     * @param int $userId
     * @param string $userLogin
     * @param int $userCountry
     * @param int $userCreateDate
     * @param int $userLoginDate
     * @param int $userRating
     * @param int $userIsNewUser
     * @param int $userNotActivated
     * @param int $userClosed
     * @param int $userBlocked
     * @param int $userTerminated
     * @param int $userHasPage
     * @param int $userIsSseller
     * @param int $userIsEco
     * @param ShowUserFeedbacks $userPositiveFeedback
     * @param ShowUserFeedbacks $userNegativeFeedback
     * @param ShowUserFeedbacks $userNeutralFeedback
     * @param int $userJuniorStatus
     * @param int $userHasShop
     * @param int $userCompanyIcon
     * @param int $userSellRatingCount
     * @param ArrayOfSellratingaveragestruct $userSellRatingAverage
     * @param int $userIsAllegroStandard
     * @param int $userIsB2cSeller
     */
    public function __construct($userId = null, $userLogin = null, $userCountry = null, $userCreateDate = null, $userLoginDate = null, $userRating = null, $userIsNewUser = null, $userNotActivated = null, $userClosed = null, $userBlocked = null, $userTerminated = null, $userHasPage = null, $userIsSseller = null, $userIsEco = null, $userPositiveFeedback = null, $userNegativeFeedback = null, $userNeutralFeedback = null, $userJuniorStatus = null, $userHasShop = null, $userCompanyIcon = null, $userSellRatingCount = null, $userSellRatingAverage = null, $userIsAllegroStandard = null, $userIsB2cSeller = null)
    {
      $this->userId = $userId;
      $this->userLogin = $userLogin;
      $this->userCountry = $userCountry;
      $this->userCreateDate = $userCreateDate;
      $this->userLoginDate = $userLoginDate;
      $this->userRating = $userRating;
      $this->userIsNewUser = $userIsNewUser;
      $this->userNotActivated = $userNotActivated;
      $this->userClosed = $userClosed;
      $this->userBlocked = $userBlocked;
      $this->userTerminated = $userTerminated;
      $this->userHasPage = $userHasPage;
      $this->userIsSseller = $userIsSseller;
      $this->userIsEco = $userIsEco;
      $this->userPositiveFeedback = $userPositiveFeedback;
      $this->userNegativeFeedback = $userNegativeFeedback;
      $this->userNeutralFeedback = $userNeutralFeedback;
      $this->userJuniorStatus = $userJuniorStatus;
      $this->userHasShop = $userHasShop;
      $this->userCompanyIcon = $userCompanyIcon;
      $this->userSellRatingCount = $userSellRatingCount;
      $this->userSellRatingAverage = $userSellRatingAverage;
      $this->userIsAllegroStandard = $userIsAllegroStandard;
      $this->userIsB2cSeller = $userIsB2cSeller;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doShowUserResponse
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doShowUserResponse
     */
    public function setUserLogin($userLogin)
    {
      $this->userLogin = $userLogin;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doShowUserResponse
     */
    public function setUserCountry($userCountry)
    {
      $this->userCountry = $userCountry;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserCreateDate()
    {
      return $this->userCreateDate;
    }

    /**
     * @param int $userCreateDate
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doShowUserResponse
     */
    public function setUserCreateDate($userCreateDate)
    {
      $this->userCreateDate = $userCreateDate;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserLoginDate()
    {
      return $this->userLoginDate;
    }

    /**
     * @param int $userLoginDate
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doShowUserResponse
     */
    public function setUserLoginDate($userLoginDate)
    {
      $this->userLoginDate = $userLoginDate;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doShowUserResponse
     */
    public function setUserRating($userRating)
    {
      $this->userRating = $userRating;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserIsNewUser()
    {
      return $this->userIsNewUser;
    }

    /**
     * @param int $userIsNewUser
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doShowUserResponse
     */
    public function setUserIsNewUser($userIsNewUser)
    {
      $this->userIsNewUser = $userIsNewUser;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserNotActivated()
    {
      return $this->userNotActivated;
    }

    /**
     * @param int $userNotActivated
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doShowUserResponse
     */
    public function setUserNotActivated($userNotActivated)
    {
      $this->userNotActivated = $userNotActivated;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserClosed()
    {
      return $this->userClosed;
    }

    /**
     * @param int $userClosed
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doShowUserResponse
     */
    public function setUserClosed($userClosed)
    {
      $this->userClosed = $userClosed;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserBlocked()
    {
      return $this->userBlocked;
    }

    /**
     * @param int $userBlocked
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doShowUserResponse
     */
    public function setUserBlocked($userBlocked)
    {
      $this->userBlocked = $userBlocked;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserTerminated()
    {
      return $this->userTerminated;
    }

    /**
     * @param int $userTerminated
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doShowUserResponse
     */
    public function setUserTerminated($userTerminated)
    {
      $this->userTerminated = $userTerminated;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserHasPage()
    {
      return $this->userHasPage;
    }

    /**
     * @param int $userHasPage
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doShowUserResponse
     */
    public function setUserHasPage($userHasPage)
    {
      $this->userHasPage = $userHasPage;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserIsSseller()
    {
      return $this->userIsSseller;
    }

    /**
     * @param int $userIsSseller
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doShowUserResponse
     */
    public function setUserIsSseller($userIsSseller)
    {
      $this->userIsSseller = $userIsSseller;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserIsEco()
    {
      return $this->userIsEco;
    }

    /**
     * @param int $userIsEco
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doShowUserResponse
     */
    public function setUserIsEco($userIsEco)
    {
      $this->userIsEco = $userIsEco;
      return $this;
    }

    /**
     * @return ShowUserFeedbacks
     */
    public function getUserPositiveFeedback()
    {
      return $this->userPositiveFeedback;
    }

    /**
     * @param ShowUserFeedbacks $userPositiveFeedback
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doShowUserResponse
     */
    public function setUserPositiveFeedback($userPositiveFeedback)
    {
      $this->userPositiveFeedback = $userPositiveFeedback;
      return $this;
    }

    /**
     * @return ShowUserFeedbacks
     */
    public function getUserNegativeFeedback()
    {
      return $this->userNegativeFeedback;
    }

    /**
     * @param ShowUserFeedbacks $userNegativeFeedback
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doShowUserResponse
     */
    public function setUserNegativeFeedback($userNegativeFeedback)
    {
      $this->userNegativeFeedback = $userNegativeFeedback;
      return $this;
    }

    /**
     * @return ShowUserFeedbacks
     */
    public function getUserNeutralFeedback()
    {
      return $this->userNeutralFeedback;
    }

    /**
     * @param ShowUserFeedbacks $userNeutralFeedback
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doShowUserResponse
     */
    public function setUserNeutralFeedback($userNeutralFeedback)
    {
      $this->userNeutralFeedback = $userNeutralFeedback;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserJuniorStatus()
    {
      return $this->userJuniorStatus;
    }

    /**
     * @param int $userJuniorStatus
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doShowUserResponse
     */
    public function setUserJuniorStatus($userJuniorStatus)
    {
      $this->userJuniorStatus = $userJuniorStatus;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserHasShop()
    {
      return $this->userHasShop;
    }

    /**
     * @param int $userHasShop
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doShowUserResponse
     */
    public function setUserHasShop($userHasShop)
    {
      $this->userHasShop = $userHasShop;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserCompanyIcon()
    {
      return $this->userCompanyIcon;
    }

    /**
     * @param int $userCompanyIcon
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doShowUserResponse
     */
    public function setUserCompanyIcon($userCompanyIcon)
    {
      $this->userCompanyIcon = $userCompanyIcon;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserSellRatingCount()
    {
      return $this->userSellRatingCount;
    }

    /**
     * @param int $userSellRatingCount
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doShowUserResponse
     */
    public function setUserSellRatingCount($userSellRatingCount)
    {
      $this->userSellRatingCount = $userSellRatingCount;
      return $this;
    }

    /**
     * @return ArrayOfSellratingaveragestruct
     */
    public function getUserSellRatingAverage()
    {
      return $this->userSellRatingAverage;
    }

    /**
     * @param ArrayOfSellratingaveragestruct $userSellRatingAverage
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doShowUserResponse
     */
    public function setUserSellRatingAverage($userSellRatingAverage)
    {
      $this->userSellRatingAverage = $userSellRatingAverage;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserIsAllegroStandard()
    {
      return $this->userIsAllegroStandard;
    }

    /**
     * @param int $userIsAllegroStandard
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doShowUserResponse
     */
    public function setUserIsAllegroStandard($userIsAllegroStandard)
    {
      $this->userIsAllegroStandard = $userIsAllegroStandard;
      return $this;
    }

    /**
     * @return int
     */
    public function getUserIsB2cSeller()
    {
      return $this->userIsB2cSeller;
    }

    /**
     * @param int $userIsB2cSeller
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doShowUserResponse
     */
    public function setUserIsB2cSeller($userIsB2cSeller)
    {
      $this->userIsB2cSeller = $userIsB2cSeller;
      return $this;
    }

}
