<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 20.09.2019
 * Time: 11:17
 */

namespace Imper86\AllegroRestApiSdk\Helper;


use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerInterface;

class LogFactory
{
    public static function log(
        ?LoggerInterface $logger,
        array $context,
        RequestInterface $request,
        ?ResponseInterface $response
    ): void
    {
        if (!$logger) {
            return;
        }

        $logLevel = (!$response || $response->getStatusCode() >= 400) ? 'error' : 'debug';

        $context['requestMethod'] = $request->getMethod();
        $context['requestUrl'] = (string)$request->getUri();
        $context['requestPath'] = $request->getUri()->getPath();
        $context['requestHeaders'] = $request->getHeaders();
        $context['requestQuery'] = $request->getUri()->getQuery();
        $context['requestBody'] = (string)$request->getBody();

        if ($response) {
            $context['responseStatusCode'] = $response->getStatusCode();
            $context['responseHeaders'] = $response->getHeaders();
            $context['responseBody'] = (string)$response->getBody();
        }

        if ($token = RequestTokenFetcher::fetch($request)) {
            if ($token && $token->claims()->has('user_name')) {
                $context['userId'] = $token->claims()->get('user_name');
            }
        }

        $context['backtrace'] = json_encode(debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS));

        $logger->log(
            $logLevel,
            "{$context['requestMethod']} {$context['requestPath']} - {$context['responseStatusCode']}",
            $context
        );
    }
}
