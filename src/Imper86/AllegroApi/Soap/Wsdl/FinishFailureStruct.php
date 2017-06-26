<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class FinishFailureStruct
{

    /**
     * @var int $finishItemId
     */
    protected $finishItemId = null;

    /**
     * @var string $finishErrorCode
     */
    protected $finishErrorCode = null;

    /**
     * @var string $finishErrorMessage
     */
    protected $finishErrorMessage = null;

    /**
     * @param int $finishItemId
     * @param string $finishErrorCode
     * @param string $finishErrorMessage
     */
    public function __construct($finishItemId = null, $finishErrorCode = null, $finishErrorMessage = null)
    {
      $this->finishItemId = $finishItemId;
      $this->finishErrorCode = $finishErrorCode;
      $this->finishErrorMessage = $finishErrorMessage;
    }

    /**
     * @return int
     */
    public function getFinishItemId()
    {
      return $this->finishItemId;
    }

    /**
     * @param int $finishItemId
     * @return \Imper86\AllegroApi\Soap\Wsdl\FinishFailureStruct
     */
    public function setFinishItemId($finishItemId)
    {
      $this->finishItemId = $finishItemId;
      return $this;
    }

    /**
     * @return string
     */
    public function getFinishErrorCode()
    {
      return $this->finishErrorCode;
    }

    /**
     * @param string $finishErrorCode
     * @return \Imper86\AllegroApi\Soap\Wsdl\FinishFailureStruct
     */
    public function setFinishErrorCode($finishErrorCode)
    {
      $this->finishErrorCode = $finishErrorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getFinishErrorMessage()
    {
      return $this->finishErrorMessage;
    }

    /**
     * @param string $finishErrorMessage
     * @return \Imper86\AllegroApi\Soap\Wsdl\FinishFailureStruct
     */
    public function setFinishErrorMessage($finishErrorMessage)
    {
      $this->finishErrorMessage = $finishErrorMessage;
      return $this;
    }

}
