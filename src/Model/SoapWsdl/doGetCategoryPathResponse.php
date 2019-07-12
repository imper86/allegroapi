<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class doGetCategoryPathResponse
{

    /**
     * @var ArrayOfCategorydata $categoryPath
     */
    protected $categoryPath = null;

    /**
     * @param ArrayOfCategorydata $categoryPath
     */
    public function __construct($categoryPath = null)
    {
      $this->categoryPath = $categoryPath;
    }

    /**
     * @return ArrayOfCategorydata
     */
    public function getCategoryPath()
    {
      return $this->categoryPath;
    }

    /**
     * @param ArrayOfCategorydata $categoryPath
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetCategoryPathResponse
     */
    public function setCategoryPath($categoryPath)
    {
      $this->categoryPath = $categoryPath;
      return $this;
    }

}
