<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class SellFormType
{

    /**
     * @var int $sellFormId
     */
    protected $sellFormId = null;

    /**
     * @var string $sellFormTitle
     */
    protected $sellFormTitle = null;

    /**
     * @var int $sellFormCat
     */
    protected $sellFormCat = null;

    /**
     * @var int $sellFormType
     */
    protected $sellFormType = null;

    /**
     * @var int $sellFormResType
     */
    protected $sellFormResType = null;

    /**
     * @var int $sellFormDefValue
     */
    protected $sellFormDefValue = null;

    /**
     * @var int $sellFormOpt
     */
    protected $sellFormOpt = null;

    /**
     * @var int $sellFormPos
     */
    protected $sellFormPos = null;

    /**
     * @var int $sellFormLength
     */
    protected $sellFormLength = null;

    /**
     * @var string $sellMinValue
     */
    protected $sellMinValue = null;

    /**
     * @var string $sellMaxValue
     */
    protected $sellMaxValue = null;

    /**
     * @var string $sellFormDesc
     */
    protected $sellFormDesc = null;

    /**
     * @var string $sellFormOptsValues
     */
    protected $sellFormOptsValues = null;

    /**
     * @var string $sellFormFieldDesc
     */
    protected $sellFormFieldDesc = null;

    /**
     * @var int $sellFormParamId
     */
    protected $sellFormParamId = null;

    /**
     * @var string $sellFormParamValues
     */
    protected $sellFormParamValues = null;

    /**
     * @var int $sellFormParentId
     */
    protected $sellFormParentId = null;

    /**
     * @var string $sellFormParentValue
     */
    protected $sellFormParentValue = null;

    /**
     * @var string $sellFormUnit
     */
    protected $sellFormUnit = null;

    /**
     * @var int $sellFormOptions
     */
    protected $sellFormOptions = null;

    /**
     * @param int $sellFormId
     * @param string $sellFormTitle
     * @param int $sellFormCat
     * @param int $sellFormType
     * @param int $sellFormResType
     * @param int $sellFormDefValue
     * @param int $sellFormOpt
     * @param int $sellFormPos
     * @param int $sellFormLength
     * @param string $sellMinValue
     * @param string $sellMaxValue
     * @param string $sellFormDesc
     * @param string $sellFormOptsValues
     * @param string $sellFormFieldDesc
     * @param int $sellFormParamId
     * @param string $sellFormParamValues
     * @param int $sellFormParentId
     * @param string $sellFormParentValue
     * @param string $sellFormUnit
     * @param int $sellFormOptions
     */
    public function __construct($sellFormId = null, $sellFormTitle = null, $sellFormCat = null, $sellFormType = null, $sellFormResType = null, $sellFormDefValue = null, $sellFormOpt = null, $sellFormPos = null, $sellFormLength = null, $sellMinValue = null, $sellMaxValue = null, $sellFormDesc = null, $sellFormOptsValues = null, $sellFormFieldDesc = null, $sellFormParamId = null, $sellFormParamValues = null, $sellFormParentId = null, $sellFormParentValue = null, $sellFormUnit = null, $sellFormOptions = null)
    {
      $this->sellFormId = $sellFormId;
      $this->sellFormTitle = $sellFormTitle;
      $this->sellFormCat = $sellFormCat;
      $this->sellFormType = $sellFormType;
      $this->sellFormResType = $sellFormResType;
      $this->sellFormDefValue = $sellFormDefValue;
      $this->sellFormOpt = $sellFormOpt;
      $this->sellFormPos = $sellFormPos;
      $this->sellFormLength = $sellFormLength;
      $this->sellMinValue = $sellMinValue;
      $this->sellMaxValue = $sellMaxValue;
      $this->sellFormDesc = $sellFormDesc;
      $this->sellFormOptsValues = $sellFormOptsValues;
      $this->sellFormFieldDesc = $sellFormFieldDesc;
      $this->sellFormParamId = $sellFormParamId;
      $this->sellFormParamValues = $sellFormParamValues;
      $this->sellFormParentId = $sellFormParentId;
      $this->sellFormParentValue = $sellFormParentValue;
      $this->sellFormUnit = $sellFormUnit;
      $this->sellFormOptions = $sellFormOptions;
    }

    /**
     * @return int
     */
    public function getSellFormId()
    {
      return $this->sellFormId;
    }

    /**
     * @param int $sellFormId
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellFormType
     */
    public function setSellFormId($sellFormId)
    {
      $this->sellFormId = $sellFormId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellFormTitle()
    {
      return $this->sellFormTitle;
    }

    /**
     * @param string $sellFormTitle
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellFormType
     */
    public function setSellFormTitle($sellFormTitle)
    {
      $this->sellFormTitle = $sellFormTitle;
      return $this;
    }

    /**
     * @return int
     */
    public function getSellFormCat()
    {
      return $this->sellFormCat;
    }

    /**
     * @param int $sellFormCat
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellFormType
     */
    public function setSellFormCat($sellFormCat)
    {
      $this->sellFormCat = $sellFormCat;
      return $this;
    }

    /**
     * @return int
     */
    public function getSellFormType()
    {
      return $this->sellFormType;
    }

    /**
     * @param int $sellFormType
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellFormType
     */
    public function setSellFormType($sellFormType)
    {
      $this->sellFormType = $sellFormType;
      return $this;
    }

    /**
     * @return int
     */
    public function getSellFormResType()
    {
      return $this->sellFormResType;
    }

    /**
     * @param int $sellFormResType
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellFormType
     */
    public function setSellFormResType($sellFormResType)
    {
      $this->sellFormResType = $sellFormResType;
      return $this;
    }

    /**
     * @return int
     */
    public function getSellFormDefValue()
    {
      return $this->sellFormDefValue;
    }

    /**
     * @param int $sellFormDefValue
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellFormType
     */
    public function setSellFormDefValue($sellFormDefValue)
    {
      $this->sellFormDefValue = $sellFormDefValue;
      return $this;
    }

    /**
     * @return int
     */
    public function getSellFormOpt()
    {
      return $this->sellFormOpt;
    }

    /**
     * @param int $sellFormOpt
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellFormType
     */
    public function setSellFormOpt($sellFormOpt)
    {
      $this->sellFormOpt = $sellFormOpt;
      return $this;
    }

    /**
     * @return int
     */
    public function getSellFormPos()
    {
      return $this->sellFormPos;
    }

    /**
     * @param int $sellFormPos
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellFormType
     */
    public function setSellFormPos($sellFormPos)
    {
      $this->sellFormPos = $sellFormPos;
      return $this;
    }

    /**
     * @return int
     */
    public function getSellFormLength()
    {
      return $this->sellFormLength;
    }

    /**
     * @param int $sellFormLength
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellFormType
     */
    public function setSellFormLength($sellFormLength)
    {
      $this->sellFormLength = $sellFormLength;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellMinValue()
    {
      return $this->sellMinValue;
    }

    /**
     * @param string $sellMinValue
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellFormType
     */
    public function setSellMinValue($sellMinValue)
    {
      $this->sellMinValue = $sellMinValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellMaxValue()
    {
      return $this->sellMaxValue;
    }

    /**
     * @param string $sellMaxValue
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellFormType
     */
    public function setSellMaxValue($sellMaxValue)
    {
      $this->sellMaxValue = $sellMaxValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellFormDesc()
    {
      return $this->sellFormDesc;
    }

    /**
     * @param string $sellFormDesc
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellFormType
     */
    public function setSellFormDesc($sellFormDesc)
    {
      $this->sellFormDesc = $sellFormDesc;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellFormOptsValues()
    {
      return $this->sellFormOptsValues;
    }

    /**
     * @param string $sellFormOptsValues
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellFormType
     */
    public function setSellFormOptsValues($sellFormOptsValues)
    {
      $this->sellFormOptsValues = $sellFormOptsValues;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellFormFieldDesc()
    {
      return $this->sellFormFieldDesc;
    }

    /**
     * @param string $sellFormFieldDesc
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellFormType
     */
    public function setSellFormFieldDesc($sellFormFieldDesc)
    {
      $this->sellFormFieldDesc = $sellFormFieldDesc;
      return $this;
    }

    /**
     * @return int
     */
    public function getSellFormParamId()
    {
      return $this->sellFormParamId;
    }

    /**
     * @param int $sellFormParamId
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellFormType
     */
    public function setSellFormParamId($sellFormParamId)
    {
      $this->sellFormParamId = $sellFormParamId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellFormParamValues()
    {
      return $this->sellFormParamValues;
    }

    /**
     * @param string $sellFormParamValues
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellFormType
     */
    public function setSellFormParamValues($sellFormParamValues)
    {
      $this->sellFormParamValues = $sellFormParamValues;
      return $this;
    }

    /**
     * @return int
     */
    public function getSellFormParentId()
    {
      return $this->sellFormParentId;
    }

    /**
     * @param int $sellFormParentId
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellFormType
     */
    public function setSellFormParentId($sellFormParentId)
    {
      $this->sellFormParentId = $sellFormParentId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellFormParentValue()
    {
      return $this->sellFormParentValue;
    }

    /**
     * @param string $sellFormParentValue
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellFormType
     */
    public function setSellFormParentValue($sellFormParentValue)
    {
      $this->sellFormParentValue = $sellFormParentValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellFormUnit()
    {
      return $this->sellFormUnit;
    }

    /**
     * @param string $sellFormUnit
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellFormType
     */
    public function setSellFormUnit($sellFormUnit)
    {
      $this->sellFormUnit = $sellFormUnit;
      return $this;
    }

    /**
     * @return int
     */
    public function getSellFormOptions()
    {
      return $this->sellFormOptions;
    }

    /**
     * @param int $sellFormOptions
     * @return \Imper86\AllegroApi\Soap\Wsdl\SellFormType
     */
    public function setSellFormOptions($sellFormOptions)
    {
      $this->sellFormOptions = $sellFormOptions;
      return $this;
    }

}
