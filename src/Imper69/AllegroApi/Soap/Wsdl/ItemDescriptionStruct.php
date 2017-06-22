<?php

namespace Imper69\AllegroApi\Soap\Wsdl;

class ItemDescriptionStruct
{

    /**
     * @var string $descriptionResult
     */
    protected $descriptionResult = null;

    /**
     * @param string $descriptionResult
     */
    public function __construct($descriptionResult = null)
    {
      $this->descriptionResult = $descriptionResult;
    }

    /**
     * @return string
     */
    public function getDescriptionResult()
    {
      return $this->descriptionResult;
    }

    /**
     * @param string $descriptionResult
     * @return \Imper69\AllegroApi\Soap\Wsdl\ItemDescriptionStruct
     */
    public function setDescriptionResult($descriptionResult)
    {
      $this->descriptionResult = $descriptionResult;
      return $this;
    }

}
