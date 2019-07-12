<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class doGetPostBuyFormsDataForSellersResponse
{

    /**
     * @var ArrayOfPostbuyformdatastruct $postBuyFormData
     */
    protected $postBuyFormData = null;

    /**
     * @param ArrayOfPostbuyformdatastruct $postBuyFormData
     */
    public function __construct($postBuyFormData = null)
    {
      $this->postBuyFormData = $postBuyFormData;
    }

    /**
     * @return ArrayOfPostbuyformdatastruct
     */
    public function getPostBuyFormData()
    {
      return $this->postBuyFormData;
    }

    /**
     * @param ArrayOfPostbuyformdatastruct $postBuyFormData
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetPostBuyFormsDataForSellersResponse
     */
    public function setPostBuyFormData($postBuyFormData)
    {
      $this->postBuyFormData = $postBuyFormData;
      return $this;
    }

}
