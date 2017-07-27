<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class doGetPostBuyItemInfoResponse
{

    /**
     * @var ArrayOfPostbuyiteminfostruct $itemPostBuyFormInfo
     */
    protected $itemPostBuyFormInfo = null;

    /**
     * @param ArrayOfPostbuyiteminfostruct $itemPostBuyFormInfo
     */
    public function __construct($itemPostBuyFormInfo = null)
    {
      $this->itemPostBuyFormInfo = $itemPostBuyFormInfo;
    }

    /**
     * @return ArrayOfPostbuyiteminfostruct
     */
    public function getItemPostBuyFormInfo()
    {
      return $this->itemPostBuyFormInfo;
    }

    /**
     * @param ArrayOfPostbuyiteminfostruct $itemPostBuyFormInfo
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetPostBuyItemInfoResponse
     */
    public function setItemPostBuyFormInfo($itemPostBuyFormInfo)
    {
      $this->itemPostBuyFormInfo = $itemPostBuyFormInfo;
      return $this;
    }

}
