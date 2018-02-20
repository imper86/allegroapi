<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class DoGetCatsDataRequest
{

    /**
     * @var int $countryId
     */
    protected $countryId = null;

    /**
     * @var int $localVersion
     */
    protected $localVersion = null;

    /**
     * @var string $webapiKey
     */
    protected $webapiKey = null;

    /**
     * @var boolean $onlyLeaf
     */
    protected $onlyLeaf = null;

    /**
     * @param int $countryId
     * @param int $localVersion
     * @param string $webapiKey
     * @param boolean $onlyLeaf
     */
    public function __construct($countryId = null, $localVersion = null, $webapiKey = null, $onlyLeaf = null)
    {
      $this->countryId = $countryId;
      $this->localVersion = $localVersion;
      $this->webapiKey = $webapiKey;
      $this->onlyLeaf = $onlyLeaf;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetCatsDataRequest
     */
    public function setCountryId($countryId)
    {
      $this->countryId = $countryId;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetCatsDataRequest
     */
    public function setLocalVersion($localVersion)
    {
      $this->localVersion = $localVersion;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetCatsDataRequest
     */
    public function setWebapiKey($webapiKey)
    {
      $this->webapiKey = $webapiKey;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getOnlyLeaf()
    {
      return $this->onlyLeaf;
    }

    /**
     * @param boolean $onlyLeaf
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetCatsDataRequest
     */
    public function setOnlyLeaf($onlyLeaf)
    {
      $this->onlyLeaf = $onlyLeaf;
      return $this;
    }

}
