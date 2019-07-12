<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class DurationInfoStruct
{

    /**
     * @var int $durationType
     */
    protected $durationType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getDurationType()
    {
      return $this->durationType;
    }

    /**
     * @param int $durationType
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DurationInfoStruct
     */
    public function setDurationType($durationType)
    {
      $this->durationType = $durationType;
      return $this;
    }

}
