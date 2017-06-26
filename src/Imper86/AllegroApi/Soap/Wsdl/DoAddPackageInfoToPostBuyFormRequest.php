<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class DoAddPackageInfoToPostBuyFormRequest
{

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var int $transactionId
     */
    protected $transactionId = null;

    /**
     * @var ArrayOfPackageinfostruct $packageInfo
     */
    protected $packageInfo = null;

    /**
     * @param string $sessionId
     * @param int $transactionId
     * @param ArrayOfPackageinfostruct $packageInfo
     */
    public function __construct($sessionId = null, $transactionId = null, $packageInfo = null)
    {
      $this->sessionId = $sessionId;
      $this->transactionId = $transactionId;
      $this->packageInfo = $packageInfo;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
      return $this->sessionId;
    }

    /**
     * @param string $sessionId
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoAddPackageInfoToPostBuyFormRequest
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return int
     */
    public function getTransactionId()
    {
      return $this->transactionId;
    }

    /**
     * @param int $transactionId
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoAddPackageInfoToPostBuyFormRequest
     */
    public function setTransactionId($transactionId)
    {
      $this->transactionId = $transactionId;
      return $this;
    }

    /**
     * @return ArrayOfPackageinfostruct
     */
    public function getPackageInfo()
    {
      return $this->packageInfo;
    }

    /**
     * @param ArrayOfPackageinfostruct $packageInfo
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoAddPackageInfoToPostBuyFormRequest
     */
    public function setPackageInfo($packageInfo)
    {
      $this->packageInfo = $packageInfo;
      return $this;
    }

}
