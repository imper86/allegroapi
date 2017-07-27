<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class DoGetSellFormFieldsRequest
{

    /**
     * @var int $countryCode
     */
    protected $countryCode = null;

    /**
     * @var int $localVersion
     */
    protected $localVersion = null;

    /**
     * @var string $webapiKey
     */
    protected $webapiKey = null;

    /**
     * @param int $countryCode
     * @param int $localVersion
     * @param string $webapiKey
     */
    public function __construct($countryCode = null, $localVersion = null, $webapiKey = null)
    {
      $this->countryCode = $countryCode;
      $this->localVersion = $localVersion;
      $this->webapiKey = $webapiKey;
    }

    /**
     * @return int
     */
    public function getCountryCode()
    {
      return $this->countryCode;
    }

    /**
     * @param int $countryCode
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetSellFormFieldsRequest
     */
    public function setCountryCode($countryCode)
    {
      $this->countryCode = $countryCode;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetSellFormFieldsRequest
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetSellFormFieldsRequest
     */
    public function setWebapiKey($webapiKey)
    {
      $this->webapiKey = $webapiKey;
      return $this;
    }

}
