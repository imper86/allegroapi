<?php

namespace Imper69\AllegroApi\Soap\Wsdl;

class DoGetShipmentPriceTypesRequest
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
     * @param int $countryId
     * @param string $webapiKey
     */
    public function __construct($countryId = null, $webapiKey = null)
    {
      $this->countryId = $countryId;
      $this->webapiKey = $webapiKey;
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
     * @return \Imper69\AllegroApi\Soap\Wsdl\DoGetShipmentPriceTypesRequest
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
     * @return \Imper69\AllegroApi\Soap\Wsdl\DoGetShipmentPriceTypesRequest
     */
    public function setWebapiKey($webapiKey)
    {
      $this->webapiKey = $webapiKey;
      return $this;
    }

}