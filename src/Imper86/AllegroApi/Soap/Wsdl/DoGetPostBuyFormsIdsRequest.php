<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class DoGetPostBuyFormsIdsRequest
{

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var ArrayOfFilteroptionstype $filterOptions
     */
    protected $filterOptions = null;

    /**
     * @var int $resultSize
     */
    protected $resultSize = null;

    /**
     * @var int $resultOffset
     */
    protected $resultOffset = null;

    /**
     * @param string $sessionId
     * @param ArrayOfFilteroptionstype $filterOptions
     * @param int $resultSize
     * @param int $resultOffset
     */
    public function __construct($sessionId = null, $filterOptions = null, $resultSize = null, $resultOffset = null)
    {
      $this->sessionId = $sessionId;
      $this->filterOptions = $filterOptions;
      $this->resultSize = $resultSize;
      $this->resultOffset = $resultOffset;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetPostBuyFormsIdsRequest
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return ArrayOfFilteroptionstype
     */
    public function getFilterOptions()
    {
      return $this->filterOptions;
    }

    /**
     * @param ArrayOfFilteroptionstype $filterOptions
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetPostBuyFormsIdsRequest
     */
    public function setFilterOptions($filterOptions)
    {
      $this->filterOptions = $filterOptions;
      return $this;
    }

    /**
     * @return int
     */
    public function getResultSize()
    {
      return $this->resultSize;
    }

    /**
     * @param int $resultSize
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetPostBuyFormsIdsRequest
     */
    public function setResultSize($resultSize)
    {
      $this->resultSize = $resultSize;
      return $this;
    }

    /**
     * @return int
     */
    public function getResultOffset()
    {
      return $this->resultOffset;
    }

    /**
     * @param int $resultOffset
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetPostBuyFormsIdsRequest
     */
    public function setResultOffset($resultOffset)
    {
      $this->resultOffset = $resultOffset;
      return $this;
    }

}
