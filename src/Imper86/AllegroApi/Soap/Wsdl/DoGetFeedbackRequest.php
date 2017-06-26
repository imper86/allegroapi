<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class DoGetFeedbackRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var int $feedbackFrom
     */
    protected $feedbackFrom = null;

    /**
     * @var int $feedbackTo
     */
    protected $feedbackTo = null;

    /**
     * @var int $feedbackOffset
     */
    protected $feedbackOffset = null;

    /**
     * @var string $feedbackKindList
     */
    protected $feedbackKindList = null;

    /**
     * @param string $sessionHandle
     * @param int $feedbackFrom
     * @param int $feedbackTo
     * @param int $feedbackOffset
     * @param string $feedbackKindList
     */
    public function __construct($sessionHandle = null, $feedbackFrom = null, $feedbackTo = null, $feedbackOffset = null, $feedbackKindList = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->feedbackFrom = $feedbackFrom;
      $this->feedbackTo = $feedbackTo;
      $this->feedbackOffset = $feedbackOffset;
      $this->feedbackKindList = $feedbackKindList;
    }

    /**
     * @return string
     */
    public function getSessionHandle()
    {
      return $this->sessionHandle;
    }

    /**
     * @param string $sessionHandle
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetFeedbackRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
      return $this;
    }

    /**
     * @return int
     */
    public function getFeedbackFrom()
    {
      return $this->feedbackFrom;
    }

    /**
     * @param int $feedbackFrom
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetFeedbackRequest
     */
    public function setFeedbackFrom($feedbackFrom)
    {
      $this->feedbackFrom = $feedbackFrom;
      return $this;
    }

    /**
     * @return int
     */
    public function getFeedbackTo()
    {
      return $this->feedbackTo;
    }

    /**
     * @param int $feedbackTo
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetFeedbackRequest
     */
    public function setFeedbackTo($feedbackTo)
    {
      $this->feedbackTo = $feedbackTo;
      return $this;
    }

    /**
     * @return int
     */
    public function getFeedbackOffset()
    {
      return $this->feedbackOffset;
    }

    /**
     * @param int $feedbackOffset
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetFeedbackRequest
     */
    public function setFeedbackOffset($feedbackOffset)
    {
      $this->feedbackOffset = $feedbackOffset;
      return $this;
    }

    /**
     * @return string
     */
    public function getFeedbackKindList()
    {
      return $this->feedbackKindList;
    }

    /**
     * @param string $feedbackKindList
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetFeedbackRequest
     */
    public function setFeedbackKindList($feedbackKindList)
    {
      $this->feedbackKindList = $feedbackKindList;
      return $this;
    }

}
