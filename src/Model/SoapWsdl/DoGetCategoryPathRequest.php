<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class DoGetCategoryPathRequest
{

    /**
     * @var string $sessionId
     */
    protected $sessionId = null;

    /**
     * @var int $categoryId
     */
    protected $categoryId = null;

    /**
     * @param string $sessionId
     * @param int $categoryId
     */
    public function __construct($sessionId = null, $categoryId = null)
    {
      $this->sessionId = $sessionId;
      $this->categoryId = $categoryId;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetCategoryPathRequest
     */
    public function setSessionId($sessionId)
    {
      $this->sessionId = $sessionId;
      return $this;
    }

    /**
     * @return int
     */
    public function getCategoryId()
    {
      return $this->categoryId;
    }

    /**
     * @param int $categoryId
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetCategoryPathRequest
     */
    public function setCategoryId($categoryId)
    {
      $this->categoryId = $categoryId;
      return $this;
    }

}
