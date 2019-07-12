<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\FilledPostBuyFormsStruct
     */
    public function setTransactionIds($transactionIds)
    {
      $this->transactionIds = $transactionIds;
      return $this;
    }

}
