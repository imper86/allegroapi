<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class DoGetItemsImagesRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var ArrayOfItemgetimage $itemsArray
     */
    protected $itemsArray = null;

    /**
     * @var int $imageType
     */
    protected $imageType = null;

    /**
     * @param string $sessionHandle
     * @param ArrayOfItemgetimage $itemsArray
     * @param int $imageType
     */
    public function __construct($sessionHandle = null, $itemsArray = null, $imageType = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->itemsArray = $itemsArray;
      $this->imageType = $imageType;
    }

    /**
     * @return string
     */
    public function getSessionHandle()
    {
      return $this->sessionHandle;
    }

    /**
     * @param string $sessionHandle
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetItemsImagesRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
      return $this;
    }

    /**
     * @return ArrayOfItemgetimage
     */
    public function getItemsArray()
    {
      return $this->itemsArray;
    }

    /**
     * @param ArrayOfItemgetimage $itemsArray
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetItemsImagesRequest
     */
    public function setItemsArray($itemsArray)
    {
      $this->itemsArray = $itemsArray;
      return $this;
    }

    /**
     * @return int
     */
    public function getImageType()
    {
      return $this->imageType;
    }

    /**
     * @param int $imageType
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoGetItemsImagesRequest
     */
    public function setImageType($imageType)
    {
      $this->imageType = $imageType;
      return $this;
    }

}
