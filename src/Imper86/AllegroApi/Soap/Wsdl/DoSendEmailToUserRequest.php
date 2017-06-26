<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class DoSendEmailToUserRequest
{

    /**
     * @var string $sessionHandle
     */
    protected $sessionHandle = null;

    /**
     * @var int $mailToUserItemId
     */
    protected $mailToUserItemId = null;

    /**
     * @var int $mailToUserReceiverId
     */
    protected $mailToUserReceiverId = null;

    /**
     * @var int $mailToUserSubjectId
     */
    protected $mailToUserSubjectId = null;

    /**
     * @var int $mailToUserOption
     */
    protected $mailToUserOption = null;

    /**
     * @var string $mailToUserMessage
     */
    protected $mailToUserMessage = null;

    /**
     * @param string $sessionHandle
     * @param int $mailToUserItemId
     * @param int $mailToUserReceiverId
     * @param int $mailToUserSubjectId
     * @param int $mailToUserOption
     * @param string $mailToUserMessage
     */
    public function __construct($sessionHandle = null, $mailToUserItemId = null, $mailToUserReceiverId = null, $mailToUserSubjectId = null, $mailToUserOption = null, $mailToUserMessage = null)
    {
      $this->sessionHandle = $sessionHandle;
      $this->mailToUserItemId = $mailToUserItemId;
      $this->mailToUserReceiverId = $mailToUserReceiverId;
      $this->mailToUserSubjectId = $mailToUserSubjectId;
      $this->mailToUserOption = $mailToUserOption;
      $this->mailToUserMessage = $mailToUserMessage;
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
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoSendEmailToUserRequest
     */
    public function setSessionHandle($sessionHandle)
    {
      $this->sessionHandle = $sessionHandle;
      return $this;
    }

    /**
     * @return int
     */
    public function getMailToUserItemId()
    {
      return $this->mailToUserItemId;
    }

    /**
     * @param int $mailToUserItemId
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoSendEmailToUserRequest
     */
    public function setMailToUserItemId($mailToUserItemId)
    {
      $this->mailToUserItemId = $mailToUserItemId;
      return $this;
    }

    /**
     * @return int
     */
    public function getMailToUserReceiverId()
    {
      return $this->mailToUserReceiverId;
    }

    /**
     * @param int $mailToUserReceiverId
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoSendEmailToUserRequest
     */
    public function setMailToUserReceiverId($mailToUserReceiverId)
    {
      $this->mailToUserReceiverId = $mailToUserReceiverId;
      return $this;
    }

    /**
     * @return int
     */
    public function getMailToUserSubjectId()
    {
      return $this->mailToUserSubjectId;
    }

    /**
     * @param int $mailToUserSubjectId
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoSendEmailToUserRequest
     */
    public function setMailToUserSubjectId($mailToUserSubjectId)
    {
      $this->mailToUserSubjectId = $mailToUserSubjectId;
      return $this;
    }

    /**
     * @return int
     */
    public function getMailToUserOption()
    {
      return $this->mailToUserOption;
    }

    /**
     * @param int $mailToUserOption
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoSendEmailToUserRequest
     */
    public function setMailToUserOption($mailToUserOption)
    {
      $this->mailToUserOption = $mailToUserOption;
      return $this;
    }

    /**
     * @return string
     */
    public function getMailToUserMessage()
    {
      return $this->mailToUserMessage;
    }

    /**
     * @param string $mailToUserMessage
     * @return \Imper86\AllegroApi\Soap\Wsdl\DoSendEmailToUserRequest
     */
    public function setMailToUserMessage($mailToUserMessage)
    {
      $this->mailToUserMessage = $mailToUserMessage;
      return $this;
    }

}
