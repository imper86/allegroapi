<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 20.09.2019
 * Time: 12:22
 */

namespace Imper86\AllegroRestApiSdk\Helper;


use Imper86\AllegroRestApiSdk\Model\SoapWsdl\ServiceService;

class SoapService
{
    /**
     * @var ServiceService[]
     */
    private static $instances = [];

    public static function get(bool $sandbox = false): ServiceService
    {
        $options = [
            'trace' => true,
            'keep_alive' => false,
            'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
        ];
        $wsdl = $sandbox ? 'https://webapi.allegro.pl.allegrosandbox.pl/service.php?wsdl' : null;

        $instanceKey = sha1(json_encode($options) . $wsdl);
        $instanceRef = &self::$instances[$instanceKey];

        if (!isset($instanceRef)) {
            $instanceRef = new ServiceService($options, $wsdl);
        }

        return $instanceRef;
    }
}
