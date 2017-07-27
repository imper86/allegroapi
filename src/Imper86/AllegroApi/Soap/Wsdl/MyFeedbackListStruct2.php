<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class MyFeedbackListStruct2
{

    /**
     * @var ArrayOfString $feedbackArray
     */
    protected $feedbackArray = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfString
     */
    public function getFeedbackArray()
    {
      return $this->feedbackArray;
    }

    /**
     * @param ArrayOfString $feedbackArray
     * @return \Imper86\AllegroApi\Soap\Wsdl\MyFeedbackListStruct2
     */
    public function setFeedbackArray($feedbackArray)
    {
      $this->feedbackArray = $feedbackArray;
      return $this;
    }

}
