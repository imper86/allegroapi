<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class doGetFavouriteCategoriesResponse
{

    /**
     * @var ArrayOfFavouritescategoriesstruct $sFavouriteCategoriesList
     */
    protected $sFavouriteCategoriesList = null;

    /**
     * @param ArrayOfFavouritescategoriesstruct $sFavouriteCategoriesList
     */
    public function __construct($sFavouriteCategoriesList = null)
    {
      $this->sFavouriteCategoriesList = $sFavouriteCategoriesList;
    }

    /**
     * @return ArrayOfFavouritescategoriesstruct
     */
    public function getSFavouriteCategoriesList()
    {
      return $this->sFavouriteCategoriesList;
    }

    /**
     * @param ArrayOfFavouritescategoriesstruct $sFavouriteCategoriesList
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetFavouriteCategoriesResponse
     */
    public function setSFavouriteCategoriesList($sFavouriteCategoriesList)
    {
      $this->sFavouriteCategoriesList = $sFavouriteCategoriesList;
      return $this;
    }

}
