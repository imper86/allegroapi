<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class PhotoInfoType
{

    /**
     * @var string $photoSize
     */
    protected $photoSize = null;

    /**
     * @var string $photoUrl
     */
    protected $photoUrl = null;

    /**
     * @var boolean $photoIsMain
     */
    protected $photoIsMain = null;

    /**
     * @param string $photoSize
     * @param string $photoUrl
     * @param boolean $photoIsMain
     */
    public function __construct($photoSize = null, $photoUrl = null, $photoIsMain = null)
    {
      $this->photoSize = $photoSize;
      $this->photoUrl = $photoUrl;
      $this->photoIsMain = $photoIsMain;
    }

    /**
     * @return string
     */
    public function getPhotoSize()
    {
      return $this->photoSize;
    }

    /**
     * @param string $photoSize
     * @return \Imper86\AllegroApi\Soap\Wsdl\PhotoInfoType
     */
    public function setPhotoSize($photoSize)
    {
      $this->photoSize = $photoSize;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhotoUrl()
    {
      return $this->photoUrl;
    }

    /**
     * @param string $photoUrl
     * @return \Imper86\AllegroApi\Soap\Wsdl\PhotoInfoType
     */
    public function setPhotoUrl($photoUrl)
    {
      $this->photoUrl = $photoUrl;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPhotoIsMain()
    {
      return $this->photoIsMain;
    }

    /**
     * @param boolean $photoIsMain
     * @return \Imper86\AllegroApi\Soap\Wsdl\PhotoInfoType
     */
    public function setPhotoIsMain($photoIsMain)
    {
      $this->photoIsMain = $photoIsMain;
      return $this;
    }

}
