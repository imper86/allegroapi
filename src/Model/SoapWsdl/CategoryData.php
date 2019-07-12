<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class CategoryData
{

    /**
     * @var int $catId
     */
    protected $catId = null;

    /**
     * @var int $catParent
     */
    protected $catParent = null;

    /**
     * @var int $catCountry
     */
    protected $catCountry = null;

    /**
     * @var int $catLevel
     */
    protected $catLevel = null;

    /**
     * @var int $catIsLeaf
     */
    protected $catIsLeaf = null;

    /**
     * @var string $catName
     */
    protected $catName = null;

    /**
     * @var int $catOptions
     */
    protected $catOptions = null;

    /**
     * @param int $catId
     * @param int $catParent
     * @param int $catCountry
     * @param int $catLevel
     * @param int $catIsLeaf
     * @param string $catName
     * @param int $catOptions
     */
    public function __construct($catId = null, $catParent = null, $catCountry = null, $catLevel = null, $catIsLeaf = null, $catName = null, $catOptions = null)
    {
      $this->catId = $catId;
      $this->catParent = $catParent;
      $this->catCountry = $catCountry;
      $this->catLevel = $catLevel;
      $this->catIsLeaf = $catIsLeaf;
      $this->catName = $catName;
      $this->catOptions = $catOptions;
    }

    /**
     * @return int
     */
    public function getCatId()
    {
      return $this->catId;
    }

    /**
     * @param int $catId
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\CategoryData
     */
    public function setCatId($catId)
    {
      $this->catId = $catId;
      return $this;
    }

    /**
     * @return int
     */
    public function getCatParent()
    {
      return $this->catParent;
    }

    /**
     * @param int $catParent
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\CategoryData
     */
    public function setCatParent($catParent)
    {
      $this->catParent = $catParent;
      return $this;
    }

    /**
     * @return int
     */
    public function getCatCountry()
    {
      return $this->catCountry;
    }

    /**
     * @param int $catCountry
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\CategoryData
     */
    public function setCatCountry($catCountry)
    {
      $this->catCountry = $catCountry;
      return $this;
    }

    /**
     * @return int
     */
    public function getCatLevel()
    {
      return $this->catLevel;
    }

    /**
     * @param int $catLevel
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\CategoryData
     */
    public function setCatLevel($catLevel)
    {
      $this->catLevel = $catLevel;
      return $this;
    }

    /**
     * @return int
     */
    public function getCatIsLeaf()
    {
      return $this->catIsLeaf;
    }

    /**
     * @param int $catIsLeaf
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\CategoryData
     */
    public function setCatIsLeaf($catIsLeaf)
    {
      $this->catIsLeaf = $catIsLeaf;
      return $this;
    }

    /**
     * @return string
     */
    public function getCatName()
    {
      return $this->catName;
    }

    /**
     * @param string $catName
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\CategoryData
     */
    public function setCatName($catName)
    {
      $this->catName = $catName;
      return $this;
    }

    /**
     * @return int
     */
    public function getCatOptions()
    {
      return $this->catOptions;
    }

    /**
     * @param int $catOptions
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\CategoryData
     */
    public function setCatOptions($catOptions)
    {
      $this->catOptions = $catOptions;
      return $this;
    }

}
