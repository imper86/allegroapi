<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

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
     * @return \Imper86\AllegroApi\Soap\Wsdl\doRemoveFromBlackListResponse
     */
    public function setBlackListResult($blackListResult)
    {
      $this->blackListResult = $blackListResult;
      return $this;
    }

}
