<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class doSetUserLicenceDateResponse
{

    /**
     * @var int $setDateValue
     */
    protected $setDateValue = null;

    /**
     * @param int $setDateValue
     */
    public function __construct($setDateValue = null)
    {
      $this->setDateValue = $setDateValue;
    }

    /**
     * @return int
     */
    public function getSetDateValue()
    {
      return $this->setDateValue;
    }

    /**
     * @param int $setDateValue
     * @return \Imper86\AllegroApi\Soap\Wsdl\doSetUserLicenceDateResponse
     */
    public function setSetDateValue($setDateValue)
    {
      $this->setDateValue = $setDateValue;
      return $this;
    }

}
