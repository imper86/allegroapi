<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 20.09.2019
 * Time: 13:12
 */

namespace Imper86\AllegroRestApiSdk\Helper;


use Imper86\AllegroRestApiSdk\Model\SoapWsdl\ServiceService;
use Psr\Log\LoggerInterface;

class SoapLogFactory
{
    public static function log(?LoggerInterface $logger, ServiceService $service, ?\SoapFault $exception = null, array $context = []): void
    {
        if (!$logger) {
            return;
        }

        $method = self::fetchActionFromHeaders($service->__getLastRequestHeaders()) ?? 'unknown_method';

        $context['requestMethod'] = $method;
        $context['requestHeaders'] = $service->__getLastRequestHeaders();
        $context['requestBody'] = $service->__getLastRequest();
        $context['responseHeaders'] = $service->__getLastResponseHeaders();
        $context['responseBody'] = $service->__getLastResponse();
        $context['faultCode'] = $exception ? $exception->faultcode : null;
        $context['faultString'] = $exception ? $exception->faultstring : null;

        $logger->log(
            $exception ? 'error' : 'debug',
            "{$method} - " . $exception ? "ERROR {$exception->faultcode}" : "OK",
            $context
        );
    }

    private static function fetchActionFromHeaders(?string $strHeaders): ?string
    {
        if (null === $strHeaders) {
            return null;
        }

        $headers = iterator_to_array((function () use ($strHeaders) {
            foreach (explode("\r\n", $strHeaders) as $strHeader) {
                $header = explode(': ', $strHeader);

                if ($header[0]) {
                    yield $header[0] => $header[1] ?? null;
                }
            }
        })());

        return $headers['SOAPAction'] ?? null;
    }
}
