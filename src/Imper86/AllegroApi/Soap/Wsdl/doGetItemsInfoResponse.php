<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class doGetItemsInfoResponse
{

    /**
     * @var ArrayOfIteminfostruct $arrayItemListInfo
     */
    protected $arrayItemListInfo = null;

    /**
     * @var ArrayOfLong $arrayItemsNotFound
     */
    protected $arrayItemsNotFound = null;

    /**
     * @var ArrayOfLong $arrayItemsAdminKilled
     */
    protected $arrayItemsAdminKilled = null;

    /**
     * @param ArrayOfIteminfostruct $arrayItemListInfo
     * @param ArrayOfLong $arrayItemsNotFound
     * @param ArrayOfLong $arrayItemsAdminKilled
     */
    public function __construct($arrayItemListInfo = null, $arrayItemsNotFound = null, $arrayItemsAdminKilled = null)
    {
      $this->arrayItemListInfo = $arrayItemListInfo;
      $this->arrayItemsNotFound = $arrayItemsNotFound;
      $this->arrayItemsAdminKilled = $arrayItemsAdminKilled;
    }

    /**
     * @return ArrayOfIteminfostruct
     */
    public function getArrayItemListInfo()
    {
      return $this->arrayItemListInfo;
    }

    /**
     * @param ArrayOfIteminfostruct $arrayItemListInfo
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetItemsInfoResponse
     */
    public function setArrayItemListInfo($arrayItemListInfo)
    {
      $this->arrayItemListInfo = $arrayItemListInfo;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getArrayItemsNotFound()
    {
      return $this->arrayItemsNotFound;
    }

    /**
     * @param ArrayOfLong $arrayItemsNotFound
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetItemsInfoResponse
     */
    public function setArrayItemsNotFound($arrayItemsNotFound)
    {
      $this->arrayItemsNotFound = $arrayItemsNotFound;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getArrayItemsAdminKilled()
    {
      return $this->arrayItemsAdminKilled;
    }

    /**
     * @param ArrayOfLong $arrayItemsAdminKilled
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetItemsInfoResponse
     */
    public function setArrayItemsAdminKilled($arrayItemsAdminKilled)
    {
      $this->arrayItemsAdminKilled = $arrayItemsAdminKilled;
      return $this;
    }

}
