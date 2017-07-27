<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class FeedbackList
{

    /**
     * @var int $fId
     */
    protected $fId = null;

    /**
     * @var int $fItemId
     */
    protected $fItemId = null;

    /**
     * @var int $fFromId
     */
    protected $fFromId = null;

    /**
     * @var int $fToId
     */
    protected $fToId = null;

    /**
     * @var int $fDate
     */
    protected $fDate = null;

    /**
     * @var string $fType
     */
    protected $fType = null;

    /**
     * @var string $fDesc
     */
    protected $fDesc = null;

    /**
     * @var int $fCorrectDate
     */
    protected $fCorrectDate = null;

    /**
     * @var string $fCorrectText
     */
    protected $fCorrectText = null;

    /**
     * @var string $fReceiverType
     */
    protected $fReceiverType = null;

    /**
     * @var string $fUserLogin
     */
    protected $fUserLogin = null;

    /**
     * @var string $fUserRating
     */
    protected $fUserRating = null;

    /**
     * @var string $fUserCountry
     */
    protected $fUserCountry = null;

    /**
     * @var int $fUserBlocked
     */
    protected $fUserBlocked = null;

    /**
     * @var int $fUserSseller
     */
    protected $fUserSseller = null;

    /**
     * @var int $fCancelled
     */
    protected $fCancelled = null;

    /**
     * @param int $fId
     * @param int $fItemId
     * @param int $fFromId
     * @param int $fToId
     * @param int $fDate
     * @param string $fType
     * @param string $fDesc
     * @param int $fCorrectDate
     * @param string $fCorrectText
     * @param string $fReceiverType
     * @param string $fUserLogin
     * @param string $fUserRating
     * @param string $fUserCountry
     * @param int $fUserBlocked
     * @param int $fUserSseller
     * @param int $fCancelled
     */
    public function __construct($fId = null, $fItemId = null, $fFromId = null, $fToId = null, $fDate = null, $fType = null, $fDesc = null, $fCorrectDate = null, $fCorrectText = null, $fReceiverType = null, $fUserLogin = null, $fUserRating = null, $fUserCountry = null, $fUserBlocked = null, $fUserSseller = null, $fCancelled = null)
    {
      $this->fId = $fId;
      $this->fItemId = $fItemId;
      $this->fFromId = $fFromId;
      $this->fToId = $fToId;
      $this->fDate = $fDate;
      $this->fType = $fType;
      $this->fDesc = $fDesc;
      $this->fCorrectDate = $fCorrectDate;
      $this->fCorrectText = $fCorrectText;
      $this->fReceiverType = $fReceiverType;
      $this->fUserLogin = $fUserLogin;
      $this->fUserRating = $fUserRating;
      $this->fUserCountry = $fUserCountry;
      $this->fUserBlocked = $fUserBlocked;
      $this->fUserSseller = $fUserSseller;
      $this->fCancelled = $fCancelled;
    }

    /**
     * @return int
     */
    public function getFId()
    {
      return $this->fId;
    }

    /**
     * @param int $fId
     * @return \Imper86\AllegroApi\Soap\Wsdl\FeedbackList
     */
    public function setFId($fId)
    {
      $this->fId = $fId;
      return $this;
    }

    /**
     * @return int
     */
    public function getFItemId()
    {
      return $this->fItemId;
    }

    /**
     * @param int $fItemId
     * @return \Imper86\AllegroApi\Soap\Wsdl\FeedbackList
     */
    public function setFItemId($fItemId)
    {
      $this->fItemId = $fItemId;
      return $this;
    }

    /**
     * @return int
     */
    public function getFFromId()
    {
      return $this->fFromId;
    }

    /**
     * @param int $fFromId
     * @return \Imper86\AllegroApi\Soap\Wsdl\FeedbackList
     */
    public function setFFromId($fFromId)
    {
      $this->fFromId = $fFromId;
      return $this;
    }

    /**
     * @return int
     */
    public function getFToId()
    {
      return $this->fToId;
    }

    /**
     * @param int $fToId
     * @return \Imper86\AllegroApi\Soap\Wsdl\FeedbackList
     */
    public function setFToId($fToId)
    {
      $this->fToId = $fToId;
      return $this;
    }

    /**
     * @return int
     */
    public function getFDate()
    {
      return $this->fDate;
    }

    /**
     * @param int $fDate
     * @return \Imper86\AllegroApi\Soap\Wsdl\FeedbackList
     */
    public function setFDate($fDate)
    {
      $this->fDate = $fDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getFType()
    {
      return $this->fType;
    }

    /**
     * @param string $fType
     * @return \Imper86\AllegroApi\Soap\Wsdl\FeedbackList
     */
    public function setFType($fType)
    {
      $this->fType = $fType;
      return $this;
    }

    /**
     * @return string
     */
    public function getFDesc()
    {
      return $this->fDesc;
    }

    /**
     * @param string $fDesc
     * @return \Imper86\AllegroApi\Soap\Wsdl\FeedbackList
     */
    public function setFDesc($fDesc)
    {
      $this->fDesc = $fDesc;
      return $this;
    }

    /**
     * @return int
     */
    public function getFCorrectDate()
    {
      return $this->fCorrectDate;
    }

    /**
     * @param int $fCorrectDate
     * @return \Imper86\AllegroApi\Soap\Wsdl\FeedbackList
     */
    public function setFCorrectDate($fCorrectDate)
    {
      $this->fCorrectDate = $fCorrectDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getFCorrectText()
    {
      return $this->fCorrectText;
    }

    /**
     * @param string $fCorrectText
     * @return \Imper86\AllegroApi\Soap\Wsdl\FeedbackList
     */
    public function setFCorrectText($fCorrectText)
    {
      $this->fCorrectText = $fCorrectText;
      return $this;
    }

    /**
     * @return string
     */
    public function getFReceiverType()
    {
      return $this->fReceiverType;
    }

    /**
     * @param string $fReceiverType
     * @return \Imper86\AllegroApi\Soap\Wsdl\FeedbackList
     */
    public function setFReceiverType($fReceiverType)
    {
      $this->fReceiverType = $fReceiverType;
      return $this;
    }

    /**
     * @return string
     */
    public function getFUserLogin()
    {
      return $this->fUserLogin;
    }

    /**
     * @param string $fUserLogin
     * @return \Imper86\AllegroApi\Soap\Wsdl\FeedbackList
     */
    public function setFUserLogin($fUserLogin)
    {
      $this->fUserLogin = $fUserLogin;
      return $this;
    }

    /**
     * @return string
     */
    public function getFUserRating()
    {
      return $this->fUserRating;
    }

    /**
     * @param string $fUserRating
     * @return \Imper86\AllegroApi\Soap\Wsdl\FeedbackList
     */
    public function setFUserRating($fUserRating)
    {
      $this->fUserRating = $fUserRating;
      return $this;
    }

    /**
     * @return string
     */
    public function getFUserCountry()
    {
      return $this->fUserCountry;
    }

    /**
     * @param string $fUserCountry
     * @return \Imper86\AllegroApi\Soap\Wsdl\FeedbackList
     */
    public function setFUserCountry($fUserCountry)
    {
      $this->fUserCountry = $fUserCountry;
      return $this;
    }

    /**
     * @return int
     */
    public function getFUserBlocked()
    {
      return $this->fUserBlocked;
    }

    /**
     * @param int $fUserBlocked
     * @return \Imper86\AllegroApi\Soap\Wsdl\FeedbackList
     */
    public function setFUserBlocked($fUserBlocked)
    {
      $this->fUserBlocked = $fUserBlocked;
      return $this;
    }

    /**
     * @return int
     */
    public function getFUserSseller()
    {
      return $this->fUserSseller;
    }

    /**
     * @param int $fUserSseller
     * @return \Imper86\AllegroApi\Soap\Wsdl\FeedbackList
     */
    public function setFUserSseller($fUserSseller)
    {
      $this->fUserSseller = $fUserSseller;
      return $this;
    }

    /**
     * @return int
     */
    public function getFCancelled()
    {
      return $this->fCancelled;
    }

    /**
     * @param int $fCancelled
     * @return \Imper86\AllegroApi\Soap\Wsdl\FeedbackList
     */
    public function setFCancelled($fCancelled)
    {
      $this->fCancelled = $fCancelled;
      return $this;
    }

}
