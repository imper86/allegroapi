<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class DoGetSellFormAttribsRequest
{

    /**
     * @var int $countryId
     */
    protected $countryId = null;

    /**
     * @var string $webapiKey
     */
    protected $webapiKey = null;

    /**
     * @var int $localVersion
     */
    protected $localVersion = null;

    /**
     * @var int $catId
     */
    protected $catId = null;

    /**
     * @param int $countryId
     * @param string $webapiKey
     * @param int $localVersion
     * @param int $catId
     */
    public function __construct($countryId = null, $webapiKey = null, $localVersion = null, $catId = null)
    {
      $this->countryId = $countryId;
      $this->webapiKey = $webapiKey;
      $this->localVersion = $localVersion;
      $this->catId = $catId;
    }

    /**
     * @return int
     */
    public function getCountryId()
    {
      return $this->countryId;
    }

    /**
     * @param int $countryId
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetSellFormAttribsRequest
     */
    public function setCountryId($countryId)
    {
      $this->countryId = $countryId;
      return $this;
    }

    /**
     * @return string
     */
    public function getWebapiKey()
    {
      return $this->webapiKey;
    }

    /**
     * @param string $webapiKey
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetSellFormAttribsRequest
     */
    public function setWebapiKey($webapiKey)
    {
      $this->webapiKey = $webapiKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getLocalVersion()
    {
      return $this->localVersion;
    }

    /**
     * @param int $localVersion
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetSellFormAttribsRequest
     */
    public function setLocalVersion($localVersion)
    {
      $this->localVersion = $localVersion;
      return $this;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetSellFormAttribsRequest
     */
    public function setCatId($catId)
    {
      $this->catId = $catId;
      return $this;
    }

}
