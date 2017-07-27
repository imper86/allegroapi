<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

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
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetCategoryPathResponse
     */
    public function setCategoryPath($categoryPath)
    {
      $this->categoryPath = $categoryPath;
      return $this;
    }

}
