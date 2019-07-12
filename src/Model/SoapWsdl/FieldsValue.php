<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class FieldsValue
{

    /**
     * @var int $fid
     */
    protected $fid = null;

    /**
     * @var string $fvalueString
     */
    protected $fvalueString = null;

    /**
     * @var int $fvalueInt
     */
    protected $fvalueInt = null;

    /**
     * @var float $fvalueFloat
     */
    protected $fvalueFloat = null;

    /**
     * @var base64Binary $fvalueImage
     */
    protected $fvalueImage = null;

    /**
     * @var int $fvalueDatetime
     */
    protected $fvalueDatetime = null;

    /**
     * @var string $fvalueDate
     */
    protected $fvalueDate = null;

    /**
     * @var RangeIntValueStruct $fvalueRangeInt
     */
    protected $fvalueRangeInt = null;

    /**
     * @var RangeFloatValueStruct $fvalueRangeFloat
     */
    protected $fvalueRangeFloat = null;

    /**
     * @var RangeDateValueStruct $fvalueRangeDate
     */
    protected $fvalueRangeDate = null;

    /**
     * @param int $fid
     */
    public function __construct($fid = null)
    {
      $this->fid = $fid;
    }

    /**
     * @return int
     */
    public function getFid()
    {
      return $this->fid;
    }

    /**
     * @param int $fid
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\FieldsValue
     */
    public function setFid($fid)
    {
      $this->fid = $fid;
      return $this;
    }

    /**
     * @return string
     */
    public function getFvalueString()
    {
      return $this->fvalueString;
    }

    /**
     * @param string $fvalueString
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\FieldsValue
     */
    public function setFvalueString($fvalueString)
    {
      $this->fvalueString = $fvalueString;
      return $this;
    }

    /**
     * @return int
     */
    public function getFvalueInt()
    {
      return $this->fvalueInt;
    }

    /**
     * @param int $fvalueInt
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\FieldsValue
     */
    public function setFvalueInt($fvalueInt)
    {
      $this->fvalueInt = $fvalueInt;
      return $this;
    }

    /**
     * @return float
     */
    public function getFvalueFloat()
    {
      return $this->fvalueFloat;
    }

    /**
     * @param float $fvalueFloat
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\FieldsValue
     */
    public function setFvalueFloat($fvalueFloat)
    {
      $this->fvalueFloat = $fvalueFloat;
      return $this;
    }

    /**
     * @return base64Binary
     */
    public function getFvalueImage()
    {
      return $this->fvalueImage;
    }

    /**
     * @param base64Binary $fvalueImage
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\FieldsValue
     */
    public function setFvalueImage($fvalueImage)
    {
      $this->fvalueImage = $fvalueImage;
      return $this;
    }

    /**
     * @return int
     */
    public function getFvalueDatetime()
    {
      return $this->fvalueDatetime;
    }

    /**
     * @param int $fvalueDatetime
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\FieldsValue
     */
    public function setFvalueDatetime($fvalueDatetime)
    {
      $this->fvalueDatetime = $fvalueDatetime;
      return $this;
    }

    /**
     * @return string
     */
    public function getFvalueDate()
    {
      return $this->fvalueDate;
    }

    /**
     * @param string $fvalueDate
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\FieldsValue
     */
    public function setFvalueDate($fvalueDate)
    {
      $this->fvalueDate = $fvalueDate;
      return $this;
    }

    /**
     * @return RangeIntValueStruct
     */
    public function getFvalueRangeInt()
    {
      return $this->fvalueRangeInt;
    }

    /**
     * @param RangeIntValueStruct $fvalueRangeInt
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\FieldsValue
     */
    public function setFvalueRangeInt($fvalueRangeInt)
    {
      $this->fvalueRangeInt = $fvalueRangeInt;
      return $this;
    }

    /**
     * @return RangeFloatValueStruct
     */
    public function getFvalueRangeFloat()
    {
      return $this->fvalueRangeFloat;
    }

    /**
     * @param RangeFloatValueStruct $fvalueRangeFloat
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\FieldsValue
     */
    public function setFvalueRangeFloat($fvalueRangeFloat)
    {
      $this->fvalueRangeFloat = $fvalueRangeFloat;
      return $this;
    }

    /**
     * @return RangeDateValueStruct
     */
    public function getFvalueRangeDate()
    {
      return $this->fvalueRangeDate;
    }

    /**
     * @param RangeDateValueStruct $fvalueRangeDate
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\FieldsValue
     */
    public function setFvalueRangeDate($fvalueRangeDate)
    {
      $this->fvalueRangeDate = $fvalueRangeDate;
      return $this;
    }

}
