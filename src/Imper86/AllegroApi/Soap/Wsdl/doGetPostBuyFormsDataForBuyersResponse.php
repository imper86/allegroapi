<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class doGetPostBuyFormsDataForBuyersResponse
{

    /**
     * @var ArrayOfPostbuyformforbuyersdatastruct $postBuyFormDataForBuyers
     */
    protected $postBuyFormDataForBuyers = null;

    /**
     * @param ArrayOfPostbuyformforbuyersdatastruct $postBuyFormDataForBuyers
     */
    public function __construct($postBuyFormDataForBuyers = null)
    {
      $this->postBuyFormDataForBuyers = $postBuyFormDataForBuyers;
    }

    /**
     * @return ArrayOfPostbuyformforbuyersdatastruct
     */
    public function getPostBuyFormDataForBuyers()
    {
      return $this->postBuyFormDataForBuyers;
    }

    /**
     * @param ArrayOfPostbuyformforbuyersdatastruct $postBuyFormDataForBuyers
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetPostBuyFormsDataForBuyersResponse
     */
    public function setPostBuyFormDataForBuyers($postBuyFormDataForBuyers)
    {
      $this->postBuyFormDataForBuyers = $postBuyFormDataForBuyers;
      return $this;
    }

}
