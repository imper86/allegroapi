<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class CategoriesListType
{

    /**
     * @var ArrayOfCategorytreetype $categoriesTree
     */
    protected $categoriesTree = null;

    /**
     * @var ArrayOfCategorypathtype $categoriesPath
     */
    protected $categoriesPath = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfCategorytreetype
     */
    public function getCategoriesTree()
    {
      return $this->categoriesTree;
    }

    /**
     * @param ArrayOfCategorytreetype $categoriesTree
     * @return \Imper86\AllegroApi\Soap\Wsdl\CategoriesListType
     */
    public function setCategoriesTree($categoriesTree)
    {
      $this->categoriesTree = $categoriesTree;
      return $this;
    }

    /**
     * @return ArrayOfCategorypathtype
     */
    public function getCategoriesPath()
    {
      return $this->categoriesPath;
    }

    /**
     * @param ArrayOfCategorypathtype $categoriesPath
     * @return \Imper86\AllegroApi\Soap\Wsdl\CategoriesListType
     */
    public function setCategoriesPath($categoriesPath)
    {
      $this->categoriesPath = $categoriesPath;
      return $this;
    }

}
