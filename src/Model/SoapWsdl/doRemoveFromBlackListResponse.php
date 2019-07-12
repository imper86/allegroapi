<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class doRemoveFromBlackListResponse
{

    /**
     * @var ArrayOfBlacklistresstruct $blackListResult
     */
    protected $blackListResult = null;

    /**
     * @param ArrayOfBlacklistresstruct $blackListResult
     */
    public function __construct($blackListResult = null)
    {
      $this->blackListResult = $blackListResult;
    }

    /**
     * @return ArrayOfBlacklistresstruct
     */
    public function getBlackListResult()
    {
      return $this->blackListResult;
    }

    /**
     * @param ArrayOfBlacklistresstruct $blackListResult
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doRemoveFromBlackListResponse
     */
    public function setBlackListResult($blackListResult)
    {
      $this->blackListResult = $blackListResult;
      return $this;
    }

}
