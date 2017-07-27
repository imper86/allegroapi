<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class AddressInfoStruct
{

    /**
     * @var int $addressType
     */
    protected $addressType = null;

    /**
     * @var AddressUserDataStruct $addressUserData
     */
    protected $addressUserData = null;

    /**
     * @param int $addressType
     * @param AddressUserDataStruct $addressUserData
     */
    public function __construct($addressType = null, $addressUserData = null)
    {
      $this->addressType = $addressType;
      $this->addressUserData = $addressUserData;
    }

    /**
     * @return int
     */
    public function getAddressType()
    {
      return $this->addressType;
    }

    /**
     * @param int $addressType
     * @return \Imper86\AllegroApi\Soap\Wsdl\AddressInfoStruct
     */
    public function setAddressType($addressType)
    {
      $this->addressType = $addressType;
      return $this;
    }

    /**
     * @return AddressUserDataStruct
     */
    public function getAddressUserData()
    {
      return $this->addressUserData;
    }

    /**
     * @param AddressUserDataStruct $addressUserData
     * @return \Imper86\AllegroApi\Soap\Wsdl\AddressInfoStruct
     */
    public function setAddressUserData($addressUserData)
    {
      $this->addressUserData = $addressUserData;
      return $this;
    }

}
