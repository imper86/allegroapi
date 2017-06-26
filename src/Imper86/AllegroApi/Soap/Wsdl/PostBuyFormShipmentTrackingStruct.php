<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class PostBuyFormShipmentTrackingStruct
{

    /**
     * @var int $postBuyFormOperatorId
     */
    protected $postBuyFormOperatorId = null;

    /**
     * @var string $postBuyFormPackageId
     */
    protected $postBuyFormPackageId = null;

    /**
     * @var string $postBuyFormPackageStatus
     */
    protected $postBuyFormPackageStatus = null;

    /**
     * @param int $postBuyFormOperatorId
     * @param string $postBuyFormPackageId
     * @param string $postBuyFormPackageStatus
     */
    public function __construct($postBuyFormOperatorId = null, $postBuyFormPackageId = null, $postBuyFormPackageStatus = null)
    {
      $this->postBuyFormOperatorId = $postBuyFormOperatorId;
      $this->postBuyFormPackageId = $postBuyFormPackageId;
      $this->postBuyFormPackageStatus = $postBuyFormPackageStatus;
    }

    /**
     * @return int
     */
    public function getPostBuyFormOperatorId()
    {
      return $this->postBuyFormOperatorId;
    }

    /**
     * @param int $postBuyFormOperatorId
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormShipmentTrackingStruct
     */
    public function setPostBuyFormOperatorId($postBuyFormOperatorId)
    {
      $this->postBuyFormOperatorId = $postBuyFormOperatorId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormPackageId()
    {
      return $this->postBuyFormPackageId;
    }

    /**
     * @param string $postBuyFormPackageId
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormShipmentTrackingStruct
     */
    public function setPostBuyFormPackageId($postBuyFormPackageId)
    {
      $this->postBuyFormPackageId = $postBuyFormPackageId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormPackageStatus()
    {
      return $this->postBuyFormPackageStatus;
    }

    /**
     * @param string $postBuyFormPackageStatus
     * @return \Imper86\AllegroApi\Soap\Wsdl\PostBuyFormShipmentTrackingStruct
     */
    public function setPostBuyFormPackageStatus($postBuyFormPackageStatus)
    {
      $this->postBuyFormPackageStatus = $postBuyFormPackageStatus;
      return $this;
    }

}
