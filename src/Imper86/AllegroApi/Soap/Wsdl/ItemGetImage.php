<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class ItemGetImage
{

    /**
     * @var int $itId
     */
    protected $itId = null;

    /**
     * @var int $itSellerId
     */
    protected $itSellerId = null;

    /**
     * @var int $itFotoCount
     */
    protected $itFotoCount = null;

    /**
     * @param int $itId
     * @param int $itSellerId
     * @param int $itFotoCount
     */
    public function __construct($itId = null, $itSellerId = null, $itFotoCount = null)
    {
      $this->itId = $itId;
      $this->itSellerId = $itSellerId;
      $this->itFotoCount = $itFotoCount;
    }

    /**
     * @return int
     */
    public function getItId()
    {
      return $this->itId;
    }

    /**
     * @param int $itId
     * @return \Imper86\AllegroApi\Soap\Wsdl\ItemGetImage
     */
    public function setItId($itId)
    {
      $this->itId = $itId;
      return $this;
    }

    /**
     * @return int
     */
    public function getItSellerId()
    {
      return $this->itSellerId;
    }

    /**
     * @param int $itSellerId
     * @return \Imper86\AllegroApi\Soap\Wsdl\ItemGetImage
     */
    public function setItSellerId($itSellerId)
    {
      $this->itSellerId = $itSellerId;
      return $this;
    }

    /**
     * @return int
     */
    public function getItFotoCount()
    {
      return $this->itFotoCount;
    }

    /**
     * @param int $itFotoCount
     * @return \Imper86\AllegroApi\Soap\Wsdl\ItemGetImage
     */
    public function setItFotoCount($itFotoCount)
    {
      $this->itFotoCount = $itFotoCount;
      return $this;
    }

}
