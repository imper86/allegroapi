<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class doGetFeedbackResponse
{

    /**
     * @var ArrayOfFeedbacklist $feedbackList
     */
    protected $feedbackList = null;

    /**
     * @var int $feedbackCount
     */
    protected $feedbackCount = null;

    /**
     * @param ArrayOfFeedbacklist $feedbackList
     * @param int $feedbackCount
     */
    public function __construct($feedbackList = null, $feedbackCount = null)
    {
      $this->feedbackList = $feedbackList;
      $this->feedbackCount = $feedbackCount;
    }

    /**
     * @return ArrayOfFeedbacklist
     */
    public function getFeedbackList()
    {
      return $this->feedbackList;
    }

    /**
     * @param ArrayOfFeedbacklist $feedbackList
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetFeedbackResponse
     */
    public function setFeedbackList($feedbackList)
    {
      $this->feedbackList = $feedbackList;
      return $this;
    }

    /**
     * @return int
     */
    public function getFeedbackCount()
    {
      return $this->feedbackCount;
    }

    /**
     * @param int $feedbackCount
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetFeedbackResponse
     */
    public function setFeedbackCount($feedbackCount)
    {
      $this->feedbackCount = $feedbackCount;
      return $this;
    }

}
