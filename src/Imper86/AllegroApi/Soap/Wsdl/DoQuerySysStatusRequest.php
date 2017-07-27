<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class DoQuerySysStatusRequest
{

    /**
     * @var int $sysvar
     */
    protected $sysvar = null;

    /**
     * @var int $countryId
     */
    protected $countryId = null;

    /**
     * @var string $webapiKey
     */
    protected $webapiKey = null;

    /**
     * @param int $sysvar
     * @param int $countryId
     * @param string $webapiKey
     */
    public function __construct($sysvar = null, $countryId = null, $webapiKey = null)
    {
      $this->sysvar = $sysvar;
      $this->countryId = $countryId;
      $this->webapiKey = $webapiKey;
    }

    /**
     * @return int
     */
    public function getSysvar()
    {
      return $this->sysvar;
    }

    /**
     * @param int $sysvar
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoQuerySysStatusRequest
     */
    public function setSysvar($sysvar)
    {
      $this->sysvar = $sysvar;
      return $this;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoQuerySysStatusRequest
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoQuerySysStatusRequest
     */
    public function setWebapiKey($webapiKey)
    {
      $this->webapiKey = $webapiKey;
      return $this;
    }

}
