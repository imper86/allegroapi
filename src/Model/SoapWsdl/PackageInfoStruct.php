<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class PackageInfoStruct
{

    /**
     * @var int $operatorId
     */
    protected $operatorId = null;

    /**
     * @var string $packageId
     */
    protected $packageId = null;

    /**
     * @var string $operatorName
     */
    protected $operatorName = null;

    /**
     * @param int $operatorId
     * @param string $packageId
     */
    public function __construct($operatorId = null, $packageId = null)
    {
      $this->operatorId = $operatorId;
      $this->packageId = $packageId;
    }

    /**
     * @return int
     */
    public function getOperatorId()
    {
      return $this->operatorId;
    }

    /**
     * @param int $operatorId
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PackageInfoStruct
     */
    public function setOperatorId($operatorId)
    {
      $this->operatorId = $operatorId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPackageId()
    {
      return $this->packageId;
    }

    /**
     * @param string $packageId
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PackageInfoStruct
     */
    public function setPackageId($packageId)
    {
      $this->packageId = $packageId;
      return $this;
    }

    /**
     * @return string
     */
    public function getOperatorName()
    {
      return $this->operatorName;
    }

    /**
     * @param string $operatorName
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PackageInfoStruct
     */
    public function setOperatorName($operatorName)
    {
      $this->operatorName = $operatorName;
      return $this;
    }

}
