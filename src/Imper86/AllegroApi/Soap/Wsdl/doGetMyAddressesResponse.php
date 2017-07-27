<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class doGetMyAddressesResponse
{

    /**
     * @var ArrayOfAddressinfostruct $addressesInfo
     */
    protected $addressesInfo = null;

    /**
     * @param ArrayOfAddressinfostruct $addressesInfo
     */
    public function __construct($addressesInfo = null)
    {
      $this->addressesInfo = $addressesInfo;
    }

    /**
     * @return ArrayOfAddressinfostruct
     */
    public function getAddressesInfo()
    {
      return $this->addressesInfo;
    }

    /**
     * @param ArrayOfAddressinfostruct $addressesInfo
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetMyAddressesResponse
     */
    public function setAddressesInfo($addressesInfo)
    {
      $this->addressesInfo = $addressesInfo;
      return $this;
    }

}
