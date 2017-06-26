<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class AdvertInfoType
{

    /**
     * @var string $serviceId
     */
    protected $serviceId = null;

    /**
     * @var string $advertId
     */
    protected $advertId = null;

    /**
     * @param string $serviceId
     * @param string $advertId
     */
    public function __construct($serviceId = null, $advertId = null)
    {
      $this->serviceId = $serviceId;
      $this->advertId = $advertId;
    }

    /**
     * @return string
     */
    public function getServiceId()
    {
      return $this->serviceId;
    }

    /**
     * @param string $serviceId
     * @return \Imper86\AllegroApi\Soap\Wsdl\AdvertInfoType
     */
    public function setServiceId($serviceId)
    {
      $this->serviceId = $serviceId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdvertId()
    {
      return $this->advertId;
    }

    /**
     * @param string $advertId
     * @return \Imper86\AllegroApi\Soap\Wsdl\AdvertInfoType
     */
    public function setAdvertId($advertId)
    {
      $this->advertId = $advertId;
      return $this;
    }

}
