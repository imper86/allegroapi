<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class RefundDetailsType
{

    /**
     * @var int $refundId
     */
    protected $refundId = null;

    /**
     * @var string $refundStatus
     */
    protected $refundStatus = null;

    /**
     * @var int $refundQuantity
     */
    protected $refundQuantity = null;

    /**
     * @var \DateTime $createdDate
     */
    protected $createdDate = null;

    /**
     * @var \DateTime $considerDate
     */
    protected $considerDate = null;

    /**
     * @param int $refundId
     * @param string $refundStatus
     * @param int $refundQuantity
     * @param \DateTime $createdDate
     * @param \DateTime $considerDate
     */
    public function __construct($refundId = null, $refundStatus = null, $refundQuantity = null, \DateTime $createdDate = null, \DateTime $considerDate = null)
    {
      $this->refundId = $refundId;
      $this->refundStatus = $refundStatus;
      $this->refundQuantity = $refundQuantity;
      $this->createdDate = $createdDate ? $createdDate->format(\DateTime::ATOM) : null;
      $this->considerDate = $considerDate ? $considerDate->format(\DateTime::ATOM) : null;
    }

    /**
     * @return int
     */
    public function getRefundId()
    {
      return $this->refundId;
    }

    /**
     * @param int $refundId
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\RefundDetailsType
     */
    public function setRefundId($refundId)
    {
      $this->refundId = $refundId;
      return $this;
    }

    /**
     * @return string
     */
    public function getRefundStatus()
    {
      return $this->refundStatus;
    }

    /**
     * @param string $refundStatus
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\RefundDetailsType
     */
    public function setRefundStatus($refundStatus)
    {
      $this->refundStatus = $refundStatus;
      return $this;
    }

    /**
     * @return int
     */
    public function getRefundQuantity()
    {
      return $this->refundQuantity;
    }

    /**
     * @param int $refundQuantity
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\RefundDetailsType
     */
    public function setRefundQuantity($refundQuantity)
    {
      $this->refundQuantity = $refundQuantity;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate()
    {
      if ($this->createdDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->createdDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $createdDate
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\RefundDetailsType
     */
    public function setCreatedDate(\DateTime $createdDate)
    {
      $this->createdDate = $createdDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getConsiderDate()
    {
      if ($this->considerDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->considerDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $considerDate
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\RefundDetailsType
     */
    public function setConsiderDate(\DateTime $considerDate)
    {
      $this->considerDate = $considerDate->format(\DateTime::ATOM);
      return $this;
    }

}
