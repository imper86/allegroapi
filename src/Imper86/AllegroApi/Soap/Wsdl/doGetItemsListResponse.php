<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class doGetItemsListResponse
{

    /**
     * @var int $itemsCount
     */
    protected $itemsCount = null;

    /**
     * @var int $itemsFeaturedCount
     */
    protected $itemsFeaturedCount = null;

    /**
     * @var ArrayOfItemslisttype $itemsList
     */
    protected $itemsList = null;

    /**
     * @var CategoriesListType $categoriesList
     */
    protected $categoriesList = null;

    /**
     * @var ArrayOfFilterslisttype $filtersList
     */
    protected $filtersList = null;

    /**
     * @var ArrayOfString $filtersRejected
     */
    protected $filtersRejected = null;

    /**
     * @param int $itemsCount
     * @param int $itemsFeaturedCount
     * @param ArrayOfItemslisttype $itemsList
     * @param CategoriesListType $categoriesList
     * @param ArrayOfFilterslisttype $filtersList
     * @param ArrayOfString $filtersRejected
     */
    public function __construct($itemsCount = null, $itemsFeaturedCount = null, $itemsList = null, $categoriesList = null, $filtersList = null, $filtersRejected = null)
    {
      $this->itemsCount = $itemsCount;
      $this->itemsFeaturedCount = $itemsFeaturedCount;
      $this->itemsList = $itemsList;
      $this->categoriesList = $categoriesList;
      $this->filtersList = $filtersList;
      $this->filtersRejected = $filtersRejected;
    }

    /**
     * @return int
     */
    public function getItemsCount()
    {
      return $this->itemsCount;
    }

    /**
     * @param int $itemsCount
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetItemsListResponse
     */
    public function setItemsCount($itemsCount)
    {
      $this->itemsCount = $itemsCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemsFeaturedCount()
    {
      return $this->itemsFeaturedCount;
    }

    /**
     * @param int $itemsFeaturedCount
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetItemsListResponse
     */
    public function setItemsFeaturedCount($itemsFeaturedCount)
    {
      $this->itemsFeaturedCount = $itemsFeaturedCount;
      return $this;
    }

    /**
     * @return ArrayOfItemslisttype
     */
    public function getItemsList()
    {
      return $this->itemsList;
    }

    /**
     * @param ArrayOfItemslisttype $itemsList
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetItemsListResponse
     */
    public function setItemsList($itemsList)
    {
      $this->itemsList = $itemsList;
      return $this;
    }

    /**
     * @return CategoriesListType
     */
    public function getCategoriesList()
    {
      return $this->categoriesList;
    }

    /**
     * @param CategoriesListType $categoriesList
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetItemsListResponse
     */
    public function setCategoriesList($categoriesList)
    {
      $this->categoriesList = $categoriesList;
      return $this;
    }

    /**
     * @return ArrayOfFilterslisttype
     */
    public function getFiltersList()
    {
      return $this->filtersList;
    }

    /**
     * @param ArrayOfFilterslisttype $filtersList
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetItemsListResponse
     */
    public function setFiltersList($filtersList)
    {
      $this->filtersList = $filtersList;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getFiltersRejected()
    {
      return $this->filtersRejected;
    }

    /**
     * @param ArrayOfString $filtersRejected
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetItemsListResponse
     */
    public function setFiltersRejected($filtersRejected)
    {
      $this->filtersRejected = $filtersRejected;
      return $this;
    }

}
