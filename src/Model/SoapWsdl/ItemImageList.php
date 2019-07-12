<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class ItemImageList
{

    /**
     * @var int $imageType
     */
    protected $imageType = null;

    /**
     * @var string $imageUrl
     */
    protected $imageUrl = null;

    /**
     * @param int $imageType
     * @param string $imageUrl
     */
    public function __construct($imageType = null, $imageUrl = null)
    {
      $this->imageType = $imageType;
      $this->imageUrl = $imageUrl;
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
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\ItemImageList
     */
    public function setImageType($imageType)
    {
      $this->imageType = $imageType;
      return $this;
    }

    /**
     * @return string
     */
    public function getImageUrl()
    {
      return $this->imageUrl;
    }

    /**
     * @param string $imageUrl
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\ItemImageList
     */
    public function setImageUrl($imageUrl)
    {
      $this->imageUrl = $imageUrl;
      return $this;
    }

}
