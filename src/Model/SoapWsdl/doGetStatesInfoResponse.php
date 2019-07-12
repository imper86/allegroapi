<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class doGetStatesInfoResponse
{

    /**
     * @var ArrayOfStateinfostruct $statesInfoArray
     */
    protected $statesInfoArray = null;

    /**
     * @param ArrayOfStateinfostruct $statesInfoArray
     */
    public function __construct($statesInfoArray = null)
    {
      $this->statesInfoArray = $statesInfoArray;
    }

    /**
     * @return ArrayOfStateinfostruct
     */
    public function getStatesInfoArray()
    {
      return $this->statesInfoArray;
    }

    /**
     * @param ArrayOfStateinfostruct $statesInfoArray
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetStatesInfoResponse
     */
    public function setStatesInfoArray($statesInfoArray)
    {
      $this->statesInfoArray = $statesInfoArray;
      return $this;
    }

}
