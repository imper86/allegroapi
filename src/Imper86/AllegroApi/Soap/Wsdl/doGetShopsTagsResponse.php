<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class doGetShopsTagsResponse
{

    /**
     * @var int $shopsTagsCount
     */
    protected $shopsTagsCount = null;

    /**
     * @var ArrayOfShopstagtypestruct $shopsTags
     */
    protected $shopsTags = null;

    /**
     * @param int $shopsTagsCount
     * @param ArrayOfShopstagtypestruct $shopsTags
     */
    public function __construct($shopsTagsCount = null, $shopsTags = null)
    {
      $this->shopsTagsCount = $shopsTagsCount;
      $this->shopsTags = $shopsTags;
    }

    /**
     * @return int
     */
    public function getShopsTagsCount()
    {
      return $this->shopsTagsCount;
    }

    /**
     * @param int $shopsTagsCount
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetShopsTagsResponse
     */
    public function setShopsTagsCount($shopsTagsCount)
    {
      $this->shopsTagsCount = $shopsTagsCount;
      return $this;
    }

    /**
     * @return ArrayOfShopstagtypestruct
     */
    public function getShopsTags()
    {
      return $this->shopsTags;
    }

    /**
     * @param ArrayOfShopstagtypestruct $shopsTags
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetShopsTagsResponse
     */
    public function setShopsTags($shopsTags)
    {
      $this->shopsTags = $shopsTags;
      return $this;
    }

}
