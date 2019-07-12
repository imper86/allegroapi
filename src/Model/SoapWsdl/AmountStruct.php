<?php

namespace Imper86\AllegroRestApiSdk\Model\SoapWsdl;

class AmountStruct
{

    /**
     * @var float $amountValue
     */
    protected $amountValue = null;

    /**
     * @var string $amountCurrencySign
     */
    protected $amountCurrencySign = null;

    /**
     * @param float $amountValue
     * @param string $amountCurrencySign
     */
    public function __construct($amountValue = null, $amountCurrencySign = null)
    {
      $this->amountValue = $amountValue;
      $this->amountCurrencySign = $amountCurrencySign;
    }

    /**
     * @return float
     */
    public function getAmountValue()
    {
      return $this->amountValue;
    }

    /**
     * @param float $amountValue
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\AmountStruct
     */
    public function setAmountValue($amountValue)
    {
      $this->amountValue = $amountValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getAmountCurrencySign()
    {
      return $this->amountCurrencySign;
    }

    /**
     * @param string $amountCurrencySign
     * @return \Imper86\AllegroRestApiSdk\Model\SoapWsdl\AmountStruct
     */
    public function setAmountCurrencySign($amountCurrencySign)
    {
      $this->amountCurrencySign = $amountCurrencySign;
      return $this;
    }

}
