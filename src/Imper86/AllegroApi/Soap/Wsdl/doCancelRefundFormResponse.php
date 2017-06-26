<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class doCancelRefundFormResponse
{

    /**
     * @var boolean $cancellationResult
     */
    protected $cancellationResult = null;

    /**
     * @param boolean $cancellationResult
     */
    public function __construct($cancellationResult = null)
    {
      $this->cancellationResult = $cancellationResult;
    }

    /**
     * @return boolean
     */
    public function getCancellationResult()
    {
      return $this->cancellationResult;
    }

    /**
     * @param boolean $cancellationResult
     * @return \Imper86\AllegroApi\Soap\Wsdl\doCancelRefundFormResponse
     */
    public function setCancellationResult($cancellationResult)
    {
      $this->cancellationResult = $cancellationResult;
      return $this;
    }

}
