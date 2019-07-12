<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class DoGetCatsDataLimitRequest
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
     * @var int $offset
     */
    protected $offset = null;

    /**
     * @var int $packageElement
     */
    protected $packageElement = null;

    /**
     * @var boolean $onlyLeaf
     */
    protected $onlyLeaf = null;

    /**
     * @param int $countryId
     * @param int $localVersion
     * @param string $webapiKey
     * @param int $offset
     * @param int $packageElement
     * @param boolean $onlyLeaf
     */
    public function __construct($countryId = null, $localVersion = null, $webapiKey = null, $offset = null, $packageElement = null, $onlyLeaf = null)
    {
      $this->countryId = $countryId;
      $this->localVersion = $localVersion;
      $this->webapiKey = $webapiKey;
      $this->offset = $offset;
      $this->packageElement = $packageElement;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetCatsDataLimitRequest
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetCatsDataLimitRequest
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetCatsDataLimitRequest
     */
    public function setWebapiKey($webapiKey)
    {
      $this->webapiKey = $webapiKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getOffset()
    {
      return $this->offset;
    }

    /**
     * @param int $offset
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetCatsDataLimitRequest
     */
    public function setOffset($offset)
    {
      $this->offset = $offset;
      return $this;
    }

    /**
     * @return int
     */
    public function getPackageElement()
    {
      return $this->packageElement;
    }

    /**
     * @param int $packageElement
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetCatsDataLimitRequest
     */
    public function setPackageElement($packageElement)
    {
      $this->packageElement = $packageElement;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoGetCatsDataLimitRequest
     */
    public function setOnlyLeaf($onlyLeaf)
    {
      $this->onlyLeaf = $onlyLeaf;
      return $this;
    }

}
