<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class FilledPostBuyFormsStruct
{

    /**
     * @var ArrayOfLong $transactionIds
     */
    protected $transactionIds = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfLong
     */
    public function getTransactionIds()
    {
      return $this->transactionIds;
    }

    /**
     * @param ArrayOfLong $transactionIds
     * @return \Imper86\AllegroApi\Soap\Wsdl\FilledPostBuyFormsStruct
     */
    public function setTransactionIds($transactionIds)
    {
      $this->transactionIds = $transactionIds;
      return $this;
    }

}
