<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 22.07.19
 * Time: 15:28
 */

namespace Imper86\AllegroRestApiSdk\Service\Factory;


use Imper86\AllegroRestApiSdk\Model\Credentials\AppCredentialsInterface;
use Imper86\AllegroRestApiSdk\Model\SoapWsdl\ServiceService;
use Lcobucci\JWT\Parser;
use Lcobucci\JWT\Token;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerInterface;
use SoapFault;

class LogFactory implements LogFactoryInterface
{
    /**
     * @var LoggerInterface
     */
    private $logger;
    /**
     * @var AppCredentialsInterface
     */
    private $credentials;
    /**
     * @var Parser
     */
    private $tokenParser;

    public function __construct(
        AppCredentialsInterface $credentials,
        Parser $tokenParser,
        ?LoggerInterface $logger = null
    )
    {
        $this->logger = $logger;
        $this->credentials = $credentials;
        $this->tokenParser = $tokenParser;
    }

    public function create(RequestInterface $request, ?ResponseInterface $response = null): void
    {
        if (!$this->logger) {
            return;
        }

        if (!$response || $response->getStatusCode() > 299) {
            $logLevel = 'error';
        } else {
            $logLevel = 'debug';
        }

        $responseStatusCode = $response ? $response->getStatusCode() : 'NO_STATUS';
        $requestBodyIsJson = false !== strpos($request->getHeaderLine('Content-Type'), 'json');
        $responseBodyIsJson = $response && false !== strpos($response->getHeaderLine('Content-Type'), 'json');
        $token = $this->fetchTokenFromRequest($request);

        $this->logger->log(
            $logLevel,
            "{$request->getMethod()} {$request->getUri()->getPath()} - {$responseStatusCode}",
            [
                'clientId' => $this->credentials->getClientId(),
                'userId' => $token ? $token->getClaim('user_name') : null,
                'requestMethod' => $request->getMethod(),
                'requestUrl' => (string)$request->getUri(),
                'requestUriPath' => $request->getUri()->getPath(),
                'requestHeaders' => $request->getHeaders(),
                'requestQuery' => $request->getUri()->getQuery(),
                'requestBody' => $requestBodyIsJson
                    ? json_decode((string)$request->getBody(), true)
                    : (string)$request->getBody(),
                'responseStatusCode' => $responseStatusCode,
                'responseHeaders' => $response ? $response->getHeaders() : null,
                'responseBody' => $responseBodyIsJson
                    ? json_decode((string)$response->getBody(), true)
                    : (string)$response->getBody(),
                'backtrace' => debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS),
            ]
        );
    }

    public function createFromSoap(ServiceService $service, ?SoapFault $fault = null): void
    {
        $method = $this->fetchSoapActionFromHeaders($service->__getLastRequestHeaders()) ?? 'UNKNOWN_METHOD';

        $this->logger->log(
            $fault ? 'error' : 'debug',
            "{$method} - " . ($fault ? 'ERROR' : 'OK'),
            [
                'requestMethod' => $method,
                'backtrace' => debug_backtrace(DEBUG_BACKTRACE_IGNORE_ARGS),
                'request' => $service->__getLastRequest(),
                'requestHeaders' => $service->__getLastRequestHeaders(),
                'response' => $service->__getLastResponse(),
                'responseHeaders' => $service->__getLastResponseHeaders(),
                'faultCode' => $fault ? $fault->faultcode : null,
                'faultString' => $fault ? $fault->faultstring : null,
            ]
        );
    }

    private function fetchTokenFromRequest(RequestInterface $request): ?Token
    {
        $authHeader = $request->getHeaderLine('Authorization');

        if (!$authHeader) {
            return null;
        }

        $authExploded = explode(' ', $authHeader);

        if (empty($authExploded[1])) {
            return null;
        }

        return $this->tokenParser->parse($authExploded[1]);
    }

    private function fetchSoapActionFromHeaders(?string $strHeaders): ?string
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
