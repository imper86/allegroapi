<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class DoGetPostBuyFormsDataForBuyersRequest
{

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var ArrayOfLong $transactionsIdsArray
     */
    protected $transactionsIdsArray = null;

    /**
     * @param string $sessionId
     * @param ArrayOfLong $transactionsIdsArray
     */
    public function __construct($sessionId = null, $transactionsIdsArray = null)
    {
      $this->sessionId = $sessionId;
      $this->transactionsIdsArray = $transactionsIdsArray;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetPostBuyFormsDataForBuyersRequest
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getTransactionsIdsArray()
    {
      return $this->transactionsIdsArray;
    }

    /**
     * @param ArrayOfLong $transactionsIdsArray
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetPostBuyFormsDataForBuyersRequest
     */
    public function setTransactionsIdsArray($transactionsIdsArray)
    {
      $this->transactionsIdsArray = $transactionsIdsArray;
      return $this;
    }

}
