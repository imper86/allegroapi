<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class doCancelTransactionResponse
{

    /**
     * @var int $cancellationResult
     */
    protected $cancellationResult = null;

    /**
     * @param int $cancellationResult
     */
    public function __construct($cancellationResult = null)
    {
      $this->cancellationResult = $cancellationResult;
    }

    /**
     * @return int
     */
    public function getCancellationResult()
    {
      return $this->cancellationResult;
    }

    /**
     * @param int $cancellationResult
     * @return \Imper86\AllegroApi\Soap\Wsdl\doCancelTransactionResponse
     */
    public function setCancellationResult($cancellationResult)
    {
      $this->cancellationResult = $cancellationResult;
      return $this;
    }

}
