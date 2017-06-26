<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 17:30
 */

namespace Imper69\AllegroApi\Soap\Service;


use Imper69\AllegroApi\Soap\Exception\SoapServiceException;
use Imper69\AllegroApi\Soap\Wsdl\ServiceService;

class SoapService extends ServiceService
{
    public function __construct()
    {
        parent::__construct(['trace' => true]);
    }

    public function __soapCall($function_name, array $arguments, array $options = null, $input_headers = null, array &$output_headers = null)
    {
        try {
            $response = parent::__soapCall($function_name, $arguments, $options, $input_headers, $output_headers);
            return $response;
        } catch (\SoapFault $soapFault) {
            throw new SoapServiceException($this, $soapFault, isset($arguments[0]) ? $arguments[0] : null);
        }
    }
}