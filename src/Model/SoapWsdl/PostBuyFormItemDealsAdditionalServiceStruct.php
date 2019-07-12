<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class PostBuyFormItemDealsAdditionalServiceStruct
{

    /**
     * @var string $additionalServiceDefinitionId
     */
    protected $additionalServiceDefinitionId = null;

    /**
     * @var string $additionalServiceName
     */
    protected $additionalServiceName = null;

    /**
     * @var int $additionalServiceQuantity
     */
    protected $additionalServiceQuantity = null;

    /**
     * @var float $additionalServicePrice
     */
    protected $additionalServicePrice = null;

    /**
     * @param string $additionalServiceDefinitionId
     * @param string $additionalServiceName
     * @param int $additionalServiceQuantity
     * @param float $additionalServicePrice
     */
    public function __construct($additionalServiceDefinitionId = null, $additionalServiceName = null, $additionalServiceQuantity = null, $additionalServicePrice = null)
    {
      $this->additionalServiceDefinitionId = $additionalServiceDefinitionId;
      $this->additionalServiceName = $additionalServiceName;
      $this->additionalServiceQuantity = $additionalServiceQuantity;
      $this->additionalServicePrice = $additionalServicePrice;
    }

    /**
     * @return string
     */
    public function getAdditionalServiceDefinitionId()
    {
      return $this->additionalServiceDefinitionId;
    }

    /**
     * @param string $additionalServiceDefinitionId
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormItemDealsAdditionalServiceStruct
     */
    public function setAdditionalServiceDefinitionId($additionalServiceDefinitionId)
    {
      $this->additionalServiceDefinitionId = $additionalServiceDefinitionId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalServiceName()
    {
      return $this->additionalServiceName;
    }

    /**
     * @param string $additionalServiceName
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormItemDealsAdditionalServiceStruct
     */
    public function setAdditionalServiceName($additionalServiceName)
    {
      $this->additionalServiceName = $additionalServiceName;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdditionalServiceQuantity()
    {
      return $this->additionalServiceQuantity;
    }

    /**
     * @param int $additionalServiceQuantity
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormItemDealsAdditionalServiceStruct
     */
    public function setAdditionalServiceQuantity($additionalServiceQuantity)
    {
      $this->additionalServiceQuantity = $additionalServiceQuantity;
      return $this;
    }

    /**
     * @return float
     */
    public function getAdditionalServicePrice()
    {
      return $this->additionalServicePrice;
    }

    /**
     * @param float $additionalServicePrice
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormItemDealsAdditionalServiceStruct
     */
    public function setAdditionalServicePrice($additionalServicePrice)
    {
      $this->additionalServicePrice = $additionalServicePrice;
      return $this;
    }

}
