<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class doMyFeedback2LimitResponse
{

    /**
     * @var ArrayOfMyfeedbackliststruct2 $myfeedbackList
     */
    protected $myfeedbackList = null;

    /**
     * @param ArrayOfMyfeedbackliststruct2 $myfeedbackList
     */
    public function __construct($myfeedbackList = null)
    {
      $this->myfeedbackList = $myfeedbackList;
    }

    /**
     * @return ArrayOfMyfeedbackliststruct2
     */
    public function getMyfeedbackList()
    {
      return $this->myfeedbackList;
    }

    /**
     * @param ArrayOfMyfeedbackliststruct2 $myfeedbackList
     * @return \Imper86\AllegroApi\Soap\Wsdl\doMyFeedback2LimitResponse
     */
    public function setMyfeedbackList($myfeedbackList)
    {
      $this->myfeedbackList = $myfeedbackList;
      return $this;
    }

}
