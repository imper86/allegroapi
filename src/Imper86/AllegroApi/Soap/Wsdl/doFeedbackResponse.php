<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class doFeedbackResponse
{

    /**
     * @var int $feedbackId
     */
    protected $feedbackId = null;

    /**
     * @param int $feedbackId
     */
    public function __construct($feedbackId = null)
    {
      $this->feedbackId = $feedbackId;
    }

    /**
     * @return int
     */
    public function getFeedbackId()
    {
      return $this->feedbackId;
    }

    /**
     * @param int $feedbackId
     * @return \Imper86\AllegroApi\Soap\Wsdl\doFeedbackResponse
     */
    public function setFeedbackId($feedbackId)
    {
      $this->feedbackId = $feedbackId;
      return $this;
    }

}
