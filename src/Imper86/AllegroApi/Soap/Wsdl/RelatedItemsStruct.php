<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class RelatedItemsStruct
{

    /**
     * @var ArrayOfRelateditemstruct $relatedItemsInfo
     */
    protected $relatedItemsInfo = null;

    /**
     * @var float $relatedItemsAmount
     */
    protected $relatedItemsAmount = null;

    /**
     * @param float $relatedItemsAmount
     */
    public function __construct($relatedItemsAmount = null)
    {
      $this->relatedItemsAmount = $relatedItemsAmount;
    }

    /**
     * @return ArrayOfRelateditemstruct
     */
    public function getRelatedItemsInfo()
    {
      return $this->relatedItemsInfo;
    }

    /**
     * @param ArrayOfRelateditemstruct $relatedItemsInfo
     * @return \Imper86\AllegroApi\Soap\Wsdl\RelatedItemsStruct
     */
    public function setRelatedItemsInfo($relatedItemsInfo)
    {
      $this->relatedItemsInfo = $relatedItemsInfo;
      return $this;
    }

    /**
     * @return float
     */
    public function getRelatedItemsAmount()
    {
      return $this->relatedItemsAmount;
    }

    /**
     * @param float $relatedItemsAmount
     * @return \Imper86\AllegroApi\Soap\Wsdl\RelatedItemsStruct
     */
    public function setRelatedItemsAmount($relatedItemsAmount)
    {
      $this->relatedItemsAmount = $relatedItemsAmount;
      return $this;
    }

}
