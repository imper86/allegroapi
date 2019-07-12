<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class PostBuyFormItemDealsVariantStruct
{

    /**
     * @var string $variantName
     */
    protected $variantName = null;

    /**
     * @var string $variantValue
     */
    protected $variantValue = null;

    /**
     * @param string $variantName
     * @param string $variantValue
     */
    public function __construct($variantName = null, $variantValue = null)
    {
      $this->variantName = $variantName;
      $this->variantValue = $variantValue;
    }

    /**
     * @return string
     */
    public function getVariantName()
    {
      return $this->variantName;
    }

    /**
     * @param string $variantName
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormItemDealsVariantStruct
     */
    public function setVariantName($variantName)
    {
      $this->variantName = $variantName;
      return $this;
    }

    /**
     * @return string
     */
    public function getVariantValue()
    {
      return $this->variantValue;
    }

    /**
     * @param string $variantValue
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormItemDealsVariantStruct
     */
    public function setVariantValue($variantValue)
    {
      $this->variantValue = $variantValue;
      return $this;
    }

}
