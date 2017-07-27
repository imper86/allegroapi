<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 17:31
 */

namespace Imper86\AllegroApi\Soap\Exception;


use Imper86\AllegroApi\Soap\Service\SoapService;

class SoapServiceException extends \Exception
{
    private $request;

    private $soapService;

    private $stringCode;

    public function __construct(\SoapClient $soapService, \SoapFault $soapFault, $request = null)
    {
        parent::__construct($soapFault->getMessage(), 0, $soapFault);
        $this->request = $request;
        $this->soapService = clone $soapService;
        $this->stringCode = $soapFault->faultcode;

        if (get_class($this) == SoapServiceException::class) {
            switch ($this->stringCode) {
                case 'ERR_INVALID_ACCESS_TOKEN':
                    throw new InvalidAccessTokenException($soapService, $soapFault, $request);
                case 'ERR_WEBAPI_EXPIRED':
                    throw new ExpiredWebApiKeyException($soapService, $soapFault, $request);
                case 'ERR_WEBAPI_KEY':
                    throw new InvalidWebApiKeyException($soapService, $soapFault, $request);
                case 'ERR_WEBAPI_KEY_INACTIVE':
                    throw new InactiveWebApiKeyException($soapService, $soapFault, $request);
                case 'ERR_NO_SESSION':
                    throw new ExpiredSessionException($soapService, $soapFault, $request);
                case 'ERR_SESSION_EXPIRED':
                    throw new ExpiredSessionException($soapService, $soapFault, $request);
            }
        }
    }

    public function getStringCode()
    {
        return $this->stringCode;
    }

    public function getLastRequestXML()
    {
        return $this->soapService->__getLastRequest();
    }

    public function getLastResponseXML()
    {
        return $this->soapService->__getLastResponse();
    }
}