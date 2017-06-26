<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class doGetMessageToBuyerResponse
{

    /**
     * @var MessageToBuyerStruct $messageToBuyer
     */
    protected $messageToBuyer = null;

    /**
     * @param MessageToBuyerStruct $messageToBuyer
     */
    public function __construct($messageToBuyer = null)
    {
      $this->messageToBuyer = $messageToBuyer;
    }

    /**
     * @return MessageToBuyerStruct
     */
    public function getMessageToBuyer()
    {
      return $this->messageToBuyer;
    }

    /**
     * @param MessageToBuyerStruct $messageToBuyer
     * @return \Imper86\AllegroApi\Soap\Wsdl\doGetMessageToBuyerResponse
     */
    public function setMessageToBuyer($messageToBuyer)
    {
      $this->messageToBuyer = $messageToBuyer;
      return $this;
    }

}
