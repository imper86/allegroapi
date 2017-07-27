<?php

namespace Imper69\AllegroApi\Soap\Wsdl;

class doFinishItemResponse
{

    /**
     * @var int $finishValue
     */
    protected $finishValue = null;

    /**
     * @param int $finishValue
     */
    public function __construct($finishValue = null)
    {
      $this->finishValue = $finishValue;
    }

    /**
     * @return int
     */
    public function getFinishValue()
    {
      return $this->finishValue;
    }

    /**
     * @param int $finishValue
     * @return \Imper69\AllegroApi\Soap\Wsdl\doFinishItemResponse
     */
    public function setFinishValue($finishValue)
    {
      $this->finishValue = $finishValue;
      return $this;
    }

}
