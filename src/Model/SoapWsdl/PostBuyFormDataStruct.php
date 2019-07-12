<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class PostBuyFormDataStruct
{

    /**
     * @var int $postBuyFormId
     */
    protected $postBuyFormId = null;

    /**
     * @var ArrayOfPostbuyformitemstruct $postBuyFormItems
     */
    protected $postBuyFormItems = null;

    /**
     * @var int $postBuyFormBuyerId
     */
    protected $postBuyFormBuyerId = null;

    /**
     * @var float $postBuyFormAmount
     */
    protected $postBuyFormAmount = null;

    /**
     * @var float $postBuyFormPostageAmount
     */
    protected $postBuyFormPostageAmount = null;

    /**
     * @var int $postBuyFormInvoiceOption
     */
    protected $postBuyFormInvoiceOption = null;

    /**
     * @var string $postBuyFormMsgToSeller
     */
    protected $postBuyFormMsgToSeller = null;

    /**
     * @var PostBuyFormAddressStruct $postBuyFormInvoiceData
     */
    protected $postBuyFormInvoiceData = null;

    /**
     * @var PostBuyFormAddressStruct $postBuyFormShipmentAddress
     */
    protected $postBuyFormShipmentAddress = null;

    /**
     * @var string $postBuyFormPayType
     */
    protected $postBuyFormPayType = null;

    /**
     * @var int $postBuyFormPayId
     */
    protected $postBuyFormPayId = null;

    /**
     * @var string $postBuyFormPayStatus
     */
    protected $postBuyFormPayStatus = null;

    /**
     * @var string $postBuyFormDateInit
     */
    protected $postBuyFormDateInit = null;

    /**
     * @var string $postBuyFormDateRecv
     */
    protected $postBuyFormDateRecv = null;

    /**
     * @var string $postBuyFormDateCancel
     */
    protected $postBuyFormDateCancel = null;

    /**
     * @var int $postBuyFormShipmentId
     */
    protected $postBuyFormShipmentId = null;

    /**
     * @var PostBuyFormAddressStruct $postBuyFormGdAddress
     */
    protected $postBuyFormGdAddress = null;

    /**
     * @var ArrayOfPostbuyformshipmenttrackingstruct $postBuyFormShipmentTracking
     */
    protected $postBuyFormShipmentTracking = null;

    /**
     * @var ArrayOfLong $postBuyFormSurchargesList
     */
    protected $postBuyFormSurchargesList = null;

    /**
     * @var string $postBuyFormGdAdditionalInfo
     */
    protected $postBuyFormGdAdditionalInfo = null;

    /**
     * @var float $postBuyFormPaymentAmount
     */
    protected $postBuyFormPaymentAmount = null;

    /**
     * @var int $postBuyFormSentBySeller
     */
    protected $postBuyFormSentBySeller = null;

    /**
     * @var string $postBuyFormBuyerLogin
     */
    protected $postBuyFormBuyerLogin = null;

    /**
     * @var string $postBuyFormBuyerEmail
     */
    protected $postBuyFormBuyerEmail = null;

    /**
     * @var float $postBuyFormAdditionalServicesAmount
     */
    protected $postBuyFormAdditionalServicesAmount = null;

    /**
     * @param int $postBuyFormId
     * @param int $postBuyFormBuyerId
     * @param float $postBuyFormAmount
     * @param float $postBuyFormPostageAmount
     * @param int $postBuyFormInvoiceOption
     * @param string $postBuyFormMsgToSeller
     * @param PostBuyFormAddressStruct $postBuyFormInvoiceData
     * @param PostBuyFormAddressStruct $postBuyFormShipmentAddress
     * @param string $postBuyFormPayType
     * @param int $postBuyFormPayId
     * @param string $postBuyFormPayStatus
     * @param string $postBuyFormDateInit
     * @param string $postBuyFormDateRecv
     * @param string $postBuyFormDateCancel
     * @param int $postBuyFormShipmentId
     * @param PostBuyFormAddressStruct $postBuyFormGdAddress
     * @param string $postBuyFormGdAdditionalInfo
     * @param float $postBuyFormPaymentAmount
     * @param int $postBuyFormSentBySeller
     * @param string $postBuyFormBuyerLogin
     * @param string $postBuyFormBuyerEmail
     * @param float $postBuyFormAdditionalServicesAmount
     */
    public function __construct($postBuyFormId = null, $postBuyFormBuyerId = null, $postBuyFormAmount = null, $postBuyFormPostageAmount = null, $postBuyFormInvoiceOption = null, $postBuyFormMsgToSeller = null, $postBuyFormInvoiceData = null, $postBuyFormShipmentAddress = null, $postBuyFormPayType = null, $postBuyFormPayId = null, $postBuyFormPayStatus = null, $postBuyFormDateInit = null, $postBuyFormDateRecv = null, $postBuyFormDateCancel = null, $postBuyFormShipmentId = null, $postBuyFormGdAddress = null, $postBuyFormGdAdditionalInfo = null, $postBuyFormPaymentAmount = null, $postBuyFormSentBySeller = null, $postBuyFormBuyerLogin = null, $postBuyFormBuyerEmail = null, $postBuyFormAdditionalServicesAmount = null)
    {
      $this->postBuyFormId = $postBuyFormId;
      $this->postBuyFormBuyerId = $postBuyFormBuyerId;
      $this->postBuyFormAmount = $postBuyFormAmount;
      $this->postBuyFormPostageAmount = $postBuyFormPostageAmount;
      $this->postBuyFormInvoiceOption = $postBuyFormInvoiceOption;
      $this->postBuyFormMsgToSeller = $postBuyFormMsgToSeller;
      $this->postBuyFormInvoiceData = $postBuyFormInvoiceData;
      $this->postBuyFormShipmentAddress = $postBuyFormShipmentAddress;
      $this->postBuyFormPayType = $postBuyFormPayType;
      $this->postBuyFormPayId = $postBuyFormPayId;
      $this->postBuyFormPayStatus = $postBuyFormPayStatus;
      $this->postBuyFormDateInit = $postBuyFormDateInit;
      $this->postBuyFormDateRecv = $postBuyFormDateRecv;
      $this->postBuyFormDateCancel = $postBuyFormDateCancel;
      $this->postBuyFormShipmentId = $postBuyFormShipmentId;
      $this->postBuyFormGdAddress = $postBuyFormGdAddress;
      $this->postBuyFormGdAdditionalInfo = $postBuyFormGdAdditionalInfo;
      $this->postBuyFormPaymentAmount = $postBuyFormPaymentAmount;
      $this->postBuyFormSentBySeller = $postBuyFormSentBySeller;
      $this->postBuyFormBuyerLogin = $postBuyFormBuyerLogin;
      $this->postBuyFormBuyerEmail = $postBuyFormBuyerEmail;
      $this->postBuyFormAdditionalServicesAmount = $postBuyFormAdditionalServicesAmount;
    }

    /**
     * @return int
     */
    public function getPostBuyFormId()
    {
      return $this->postBuyFormId;
    }

    /**
     * @param int $postBuyFormId
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormDataStruct
     */
    public function setPostBuyFormId($postBuyFormId)
    {
      $this->postBuyFormId = $postBuyFormId;
      return $this;
    }

    /**
     * @return ArrayOfPostbuyformitemstruct
     */
    public function getPostBuyFormItems()
    {
      return $this->postBuyFormItems;
    }

    /**
     * @param ArrayOfPostbuyformitemstruct $postBuyFormItems
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormDataStruct
     */
    public function setPostBuyFormItems($postBuyFormItems)
    {
      $this->postBuyFormItems = $postBuyFormItems;
      return $this;
    }

    /**
     * @return int
     */
    public function getPostBuyFormBuyerId()
    {
      return $this->postBuyFormBuyerId;
    }

    /**
     * @param int $postBuyFormBuyerId
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormDataStruct
     */
    public function setPostBuyFormBuyerId($postBuyFormBuyerId)
    {
      $this->postBuyFormBuyerId = $postBuyFormBuyerId;
      return $this;
    }

    /**
     * @return float
     */
    public function getPostBuyFormAmount()
    {
      return $this->postBuyFormAmount;
    }

    /**
     * @param float $postBuyFormAmount
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormDataStruct
     */
    public function setPostBuyFormAmount($postBuyFormAmount)
    {
      $this->postBuyFormAmount = $postBuyFormAmount;
      return $this;
    }

    /**
     * @return float
     */
    public function getPostBuyFormPostageAmount()
    {
      return $this->postBuyFormPostageAmount;
    }

    /**
     * @param float $postBuyFormPostageAmount
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormDataStruct
     */
    public function setPostBuyFormPostageAmount($postBuyFormPostageAmount)
    {
      $this->postBuyFormPostageAmount = $postBuyFormPostageAmount;
      return $this;
    }

    /**
     * @return int
     */
    public function getPostBuyFormInvoiceOption()
    {
      return $this->postBuyFormInvoiceOption;
    }

    /**
     * @param int $postBuyFormInvoiceOption
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormDataStruct
     */
    public function setPostBuyFormInvoiceOption($postBuyFormInvoiceOption)
    {
      $this->postBuyFormInvoiceOption = $postBuyFormInvoiceOption;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormMsgToSeller()
    {
      return $this->postBuyFormMsgToSeller;
    }

    /**
     * @param string $postBuyFormMsgToSeller
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormDataStruct
     */
    public function setPostBuyFormMsgToSeller($postBuyFormMsgToSeller)
    {
      $this->postBuyFormMsgToSeller = $postBuyFormMsgToSeller;
      return $this;
    }

    /**
     * @return PostBuyFormAddressStruct
     */
    public function getPostBuyFormInvoiceData()
    {
      return $this->postBuyFormInvoiceData;
    }

    /**
     * @param PostBuyFormAddressStruct $postBuyFormInvoiceData
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormDataStruct
     */
    public function setPostBuyFormInvoiceData($postBuyFormInvoiceData)
    {
      $this->postBuyFormInvoiceData = $postBuyFormInvoiceData;
      return $this;
    }

    /**
     * @return PostBuyFormAddressStruct
     */
    public function getPostBuyFormShipmentAddress()
    {
      return $this->postBuyFormShipmentAddress;
    }

    /**
     * @param PostBuyFormAddressStruct $postBuyFormShipmentAddress
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormDataStruct
     */
    public function setPostBuyFormShipmentAddress($postBuyFormShipmentAddress)
    {
      $this->postBuyFormShipmentAddress = $postBuyFormShipmentAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormPayType()
    {
      return $this->postBuyFormPayType;
    }

    /**
     * @param string $postBuyFormPayType
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormDataStruct
     */
    public function setPostBuyFormPayType($postBuyFormPayType)
    {
      $this->postBuyFormPayType = $postBuyFormPayType;
      return $this;
    }

    /**
     * @return int
     */
    public function getPostBuyFormPayId()
    {
      return $this->postBuyFormPayId;
    }

    /**
     * @param int $postBuyFormPayId
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormDataStruct
     */
    public function setPostBuyFormPayId($postBuyFormPayId)
    {
      $this->postBuyFormPayId = $postBuyFormPayId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormPayStatus()
    {
      return $this->postBuyFormPayStatus;
    }

    /**
     * @param string $postBuyFormPayStatus
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormDataStruct
     */
    public function setPostBuyFormPayStatus($postBuyFormPayStatus)
    {
      $this->postBuyFormPayStatus = $postBuyFormPayStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormDateInit()
    {
      return $this->postBuyFormDateInit;
    }

    /**
     * @param string $postBuyFormDateInit
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormDataStruct
     */
    public function setPostBuyFormDateInit($postBuyFormDateInit)
    {
      $this->postBuyFormDateInit = $postBuyFormDateInit;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormDateRecv()
    {
      return $this->postBuyFormDateRecv;
    }

    /**
     * @param string $postBuyFormDateRecv
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormDataStruct
     */
    public function setPostBuyFormDateRecv($postBuyFormDateRecv)
    {
      $this->postBuyFormDateRecv = $postBuyFormDateRecv;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormDateCancel()
    {
      return $this->postBuyFormDateCancel;
    }

    /**
     * @param string $postBuyFormDateCancel
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormDataStruct
     */
    public function setPostBuyFormDateCancel($postBuyFormDateCancel)
    {
      $this->postBuyFormDateCancel = $postBuyFormDateCancel;
      return $this;
    }

    /**
     * @return int
     */
    public function getPostBuyFormShipmentId()
    {
      return $this->postBuyFormShipmentId;
    }

    /**
     * @param int $postBuyFormShipmentId
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormDataStruct
     */
    public function setPostBuyFormShipmentId($postBuyFormShipmentId)
    {
      $this->postBuyFormShipmentId = $postBuyFormShipmentId;
      return $this;
    }

    /**
     * @return PostBuyFormAddressStruct
     */
    public function getPostBuyFormGdAddress()
    {
      return $this->postBuyFormGdAddress;
    }

    /**
     * @param PostBuyFormAddressStruct $postBuyFormGdAddress
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormDataStruct
     */
    public function setPostBuyFormGdAddress($postBuyFormGdAddress)
    {
      $this->postBuyFormGdAddress = $postBuyFormGdAddress;
      return $this;
    }

    /**
     * @return ArrayOfPostbuyformshipmenttrackingstruct
     */
    public function getPostBuyFormShipmentTracking()
    {
      return $this->postBuyFormShipmentTracking;
    }

    /**
     * @param ArrayOfPostbuyformshipmenttrackingstruct $postBuyFormShipmentTracking
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormDataStruct
     */
    public function setPostBuyFormShipmentTracking($postBuyFormShipmentTracking)
    {
      $this->postBuyFormShipmentTracking = $postBuyFormShipmentTracking;
      return $this;
    }

    /**
     * @return ArrayOfLong
     */
    public function getPostBuyFormSurchargesList()
    {
      return $this->postBuyFormSurchargesList;
    }

    /**
     * @param ArrayOfLong $postBuyFormSurchargesList
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormDataStruct
     */
    public function setPostBuyFormSurchargesList($postBuyFormSurchargesList)
    {
      $this->postBuyFormSurchargesList = $postBuyFormSurchargesList;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormGdAdditionalInfo()
    {
      return $this->postBuyFormGdAdditionalInfo;
    }

    /**
     * @param string $postBuyFormGdAdditionalInfo
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormDataStruct
     */
    public function setPostBuyFormGdAdditionalInfo($postBuyFormGdAdditionalInfo)
    {
      $this->postBuyFormGdAdditionalInfo = $postBuyFormGdAdditionalInfo;
      return $this;
    }

    /**
     * @return float
     */
    public function getPostBuyFormPaymentAmount()
    {
      return $this->postBuyFormPaymentAmount;
    }

    /**
     * @param float $postBuyFormPaymentAmount
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormDataStruct
     */
    public function setPostBuyFormPaymentAmount($postBuyFormPaymentAmount)
    {
      $this->postBuyFormPaymentAmount = $postBuyFormPaymentAmount;
      return $this;
    }

    /**
     * @return int
     */
    public function getPostBuyFormSentBySeller()
    {
      return $this->postBuyFormSentBySeller;
    }

    /**
     * @param int $postBuyFormSentBySeller
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormDataStruct
     */
    public function setPostBuyFormSentBySeller($postBuyFormSentBySeller)
    {
      $this->postBuyFormSentBySeller = $postBuyFormSentBySeller;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormBuyerLogin()
    {
      return $this->postBuyFormBuyerLogin;
    }

    /**
     * @param string $postBuyFormBuyerLogin
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormDataStruct
     */
    public function setPostBuyFormBuyerLogin($postBuyFormBuyerLogin)
    {
      $this->postBuyFormBuyerLogin = $postBuyFormBuyerLogin;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostBuyFormBuyerEmail()
    {
      return $this->postBuyFormBuyerEmail;
    }

    /**
     * @param string $postBuyFormBuyerEmail
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormDataStruct
     */
    public function setPostBuyFormBuyerEmail($postBuyFormBuyerEmail)
    {
      $this->postBuyFormBuyerEmail = $postBuyFormBuyerEmail;
      return $this;
    }

    /**
     * @return float
     */
    public function getPostBuyFormAdditionalServicesAmount()
    {
      return $this->postBuyFormAdditionalServicesAmount;
    }

    /**
     * @param float $postBuyFormAdditionalServicesAmount
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\PostBuyFormDataStruct
     */
    public function setPostBuyFormAdditionalServicesAmount($postBuyFormAdditionalServicesAmount)
    {
      $this->postBuyFormAdditionalServicesAmount = $postBuyFormAdditionalServicesAmount;
      return $this;
    }

}
