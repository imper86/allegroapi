<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class AfterSalesServiceConditionsStruct
{

    /**
     * @var string $impliedWarranty
     */
    protected $impliedWarranty = null;

    /**
     * @var string $returnPolicy
     */
    protected $returnPolicy = null;

    /**
     * @var string $warranty
     */
    protected $warranty = null;

    /**
     * @param string $impliedWarranty
     * @param string $returnPolicy
     * @param string $warranty
     */
    public function __construct($impliedWarranty = null, $returnPolicy = null, $warranty = null)
    {
      $this->impliedWarranty = $impliedWarranty;
      $this->returnPolicy = $returnPolicy;
      $this->warranty = $warranty;
    }

    /**
     * @return string
     */
    public function getImpliedWarranty()
    {
      return $this->impliedWarranty;
    }

    /**
     * @param string $impliedWarranty
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\AfterSalesServiceConditionsStruct
     */
    public function setImpliedWarranty($impliedWarranty)
    {
      $this->impliedWarranty = $impliedWarranty;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnPolicy()
    {
      return $this->returnPolicy;
    }

    /**
     * @param string $returnPolicy
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\AfterSalesServiceConditionsStruct
     */
    public function setReturnPolicy($returnPolicy)
    {
      $this->returnPolicy = $returnPolicy;
      return $this;
    }

    /**
     * @return string
     */
    public function getWarranty()
    {
      return $this->warranty;
    }

    /**
     * @param string $warranty
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\AfterSalesServiceConditionsStruct
     */
    public function setWarranty($warranty)
    {
      $this->warranty = $warranty;
      return $this;
    }

}
