<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class doGetMyPayoutsDetailsResponse
{

    /**
     * @var int $paymentsCount
     */
    protected $paymentsCount = null;

    /**
     * @var ArrayOfPayoutpaymentsstruct $payments
     */
    protected $payments = null;

    /**
     * @var int $refundsFromCount
     */
    protected $refundsFromCount = null;

    /**
     * @var ArrayOfPayoutrefundfromstruct $refundFrom
     */
    protected $refundFrom = null;

    /**
     * @var int $refundsToCount
     */
    protected $refundsToCount = null;

    /**
     * @var ArrayOfPayoutrefundtostruct $refundTo
     */
    protected $refundTo = null;

    /**
     * @param int $paymentsCount
     * @param ArrayOfPayoutpaymentsstruct $payments
     * @param int $refundsFromCount
     * @param ArrayOfPayoutrefundfromstruct $refundFrom
     * @param int $refundsToCount
     * @param ArrayOfPayoutrefundtostruct $refundTo
     */
    public function __construct($paymentsCount = null, $payments = null, $refundsFromCount = null, $refundFrom = null, $refundsToCount = null, $refundTo = null)
    {
      $this->paymentsCount = $paymentsCount;
      $this->payments = $payments;
      $this->refundsFromCount = $refundsFromCount;
      $this->refundFrom = $refundFrom;
      $this->refundsToCount = $refundsToCount;
      $this->refundTo = $refundTo;
    }

    /**
     * @return int
     */
    public function getPaymentsCount()
    {
      return $this->paymentsCount;
    }

    /**
     * @param int $paymentsCount
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetMyPayoutsDetailsResponse
     */
    public function setPaymentsCount($paymentsCount)
    {
      $this->paymentsCount = $paymentsCount;
      return $this;
    }

    /**
     * @return ArrayOfPayoutpaymentsstruct
     */
    public function getPayments()
    {
      return $this->payments;
    }

    /**
     * @param ArrayOfPayoutpaymentsstruct $payments
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetMyPayoutsDetailsResponse
     */
    public function setPayments($payments)
    {
      $this->payments = $payments;
      return $this;
    }

    /**
     * @return int
     */
    public function getRefundsFromCount()
    {
      return $this->refundsFromCount;
    }

    /**
     * @param int $refundsFromCount
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetMyPayoutsDetailsResponse
     */
    public function setRefundsFromCount($refundsFromCount)
    {
      $this->refundsFromCount = $refundsFromCount;
      return $this;
    }

    /**
     * @return ArrayOfPayoutrefundfromstruct
     */
    public function getRefundFrom()
    {
      return $this->refundFrom;
    }

    /**
     * @param ArrayOfPayoutrefundfromstruct $refundFrom
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetMyPayoutsDetailsResponse
     */
    public function setRefundFrom($refundFrom)
    {
      $this->refundFrom = $refundFrom;
      return $this;
    }

    /**
     * @return int
     */
    public function getRefundsToCount()
    {
      return $this->refundsToCount;
    }

    /**
     * @param int $refundsToCount
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetMyPayoutsDetailsResponse
     */
    public function setRefundsToCount($refundsToCount)
    {
      $this->refundsToCount = $refundsToCount;
      return $this;
    }

    /**
     * @return ArrayOfPayoutrefundtostruct
     */
    public function getRefundTo()
    {
      return $this->refundTo;
    }

    /**
     * @param ArrayOfPayoutrefundtostruct $refundTo
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\doGetMyPayoutsDetailsResponse
     */
    public function setRefundTo($refundTo)
    {
      $this->refundTo = $refundTo;
      return $this;
    }

}
