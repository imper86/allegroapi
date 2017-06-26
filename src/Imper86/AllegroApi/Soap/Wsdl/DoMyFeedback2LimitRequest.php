<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class DoMyFeedback2LimitRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var string $feedbackType
     */
    protected $feedbackType = null;

    /**
     * @var int $offset
     */
    protected $offset = null;

    /**
     * @var int $desc
     */
    protected $desc = null;

    /**
     * @var ArrayOfLong $itemsArray
     */
    protected $itemsArray = null;

    /**
     * @var int $packageElement
     */
    protected $packageElement = null;

    /**
     * @param string $sessionHandle
     * @param string $feedbackType
     * @param int $offset
     * @param int $desc
     * @param ArrayOfLong $itemsArray
     * @param int $packageElement
     */
    public function __construct($sessionHandle = null, $feedbackType = null, $offset = null, $desc = null, $itemsArray = null, $packageElement = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->feedbackType = $feedbackType;
      $this->offset = $offset;
      $this->desc = $desc;
      $this->itemsArray = $itemsArray;
      $this->packageElement = $packageElement;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoMyFeedback2LimitRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
      return $this;
    }

    /**
     * @return string
     */
    public function getFeedbackType()
    {
      return $this->feedbackType;
    }

    /**
     * @param string $feedbackType
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoMyFeedback2LimitRequest
     */
    public function setFeedbackType($feedbackType)
    {
      $this->feedbackType = $feedbackType;
      return $this;
    }

    /**
     * @return int
     */
    public function getOffset()
    {
      return $this->offset;
    }

    /**
     * @param int $offset
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoMyFeedback2LimitRequest
     */
    public function setOffset($offset)
    {
      $this->offset = $offset;
      return $this;
    }

    /**
     * @return int
     */
    public function getDesc()
    {
      return $this->desc;
    }

    /**
     * @param int $desc
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoMyFeedback2LimitRequest
     */
    public function setDesc($desc)
    {
      $this->desc = $desc;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getItemsArray()
    {
      return $this->itemsArray;
    }

    /**
     * @param ArrayOfLong $itemsArray
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoMyFeedback2LimitRequest
     */
    public function setItemsArray($itemsArray)
    {
      $this->itemsArray = $itemsArray;
      return $this;
    }

    /**
     * @return int
     */
    public function getPackageElement()
    {
      return $this->packageElement;
    }

    /**
     * @param int $packageElement
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoMyFeedback2LimitRequest
     */
    public function setPackageElement($packageElement)
    {
      $this->packageElement = $packageElement;
      return $this;
    }

}
