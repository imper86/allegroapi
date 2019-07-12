<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class doAddToBlackListResponse
{

    /**
     * @var ArrayOfUserblacklistaddresultstruct $userBlackListResultsArr
     */
    protected $userBlackListResultsArr = null;

    /**
     * @param ArrayOfUserblacklistaddresultstruct $userBlackListResultsArr
     */
    public function __construct($userBlackListResultsArr = null)
    {
      $this->userBlackListResultsArr = $userBlackListResultsArr;
    }

    /**
     * @return ArrayOfUserblacklistaddresultstruct
     */
    public function getUserBlackListResultsArr()
    {
      return $this->userBlackListResultsArr;
    }

    /**
     * @param ArrayOfUserblacklistaddresultstruct $userBlackListResultsArr
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doAddToBlackListResponse
     */
    public function setUserBlackListResultsArr($userBlackListResultsArr)
    {
      $this->userBlackListResultsArr = $userBlackListResultsArr;
      return $this;
    }

}
