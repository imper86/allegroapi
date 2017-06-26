<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class DoFeedbackManyRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var ArrayOfFeedbackmanystruct $feedbacksList
     */
    protected $feedbacksList = null;

    /**
     * @param string $sessionHandle
     * @param ArrayOfFeedbackmanystruct $feedbacksList
     */
    public function __construct($sessionHandle = null, $feedbacksList = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->feedbacksList = $feedbacksList;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoFeedbackManyRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
      return $this;
    }

    /**
     * @return ArrayOfFeedbackmanystruct
     */
    public function getFeedbacksList()
    {
      return $this->feedbacksList;
    }

    /**
     * @param ArrayOfFeedbackmanystruct $feedbacksList
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoFeedbackManyRequest
     */
    public function setFeedbacksList($feedbacksList)
    {
      $this->feedbacksList = $feedbacksList;
      return $this;
    }

}
