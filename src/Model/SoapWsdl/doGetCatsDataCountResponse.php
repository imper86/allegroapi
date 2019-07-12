<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class doGetCatsDataCountResponse
{

    /**
     * @var int $catsCount
     */
    protected $catsCount = null;

    /**
     * @var int $verKey
     */
    protected $verKey = null;

    /**
     * @var string $verStr
     */
    protected $verStr = null;

    /**
     * @param int $catsCount
     * @param int $verKey
     * @param string $verStr
     */
    public function __construct($catsCount = null, $verKey = null, $verStr = null)
    {
      $this->catsCount = $catsCount;
      $this->verKey = $verKey;
      $this->verStr = $verStr;
    }

    /**
     * @return int
     */
    public function getCatsCount()
    {
      return $this->catsCount;
    }

    /**
     * @param int $catsCount
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetCatsDataCountResponse
     */
    public function setCatsCount($catsCount)
    {
      $this->catsCount = $catsCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getVerKey()
    {
      return $this->verKey;
    }

    /**
     * @param int $verKey
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetCatsDataCountResponse
     */
    public function setVerKey($verKey)
    {
      $this->verKey = $verKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getVerStr()
    {
      return $this->verStr;
    }

    /**
     * @param string $verStr
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetCatsDataCountResponse
     */
    public function setVerStr($verStr)
    {
      $this->verStr = $verStr;
      return $this;
    }

}
