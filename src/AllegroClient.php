<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 20.09.2019
 * Time: 12:18
 */

namespace Imper86\AllegroRestApiSdk;


use Http\Adapter\Guzzle6\Client;
use Imper86\AllegroRestApiSdk\Helper\LogFactory;
use Imper86\AllegroRestApiSdk\Helper\SandboxUri;
use Imper86\AllegroRestApiSdk\Helper\SoapLogFactory;
use Imper86\AllegroRestApiSdk\Helper\SoapService;
use Imper86\AllegroRestApiSdk\Model\Credentials\AppCredentialsInterface;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerInterface;

class AllegroClient implements AllegroClientInterface
{
    /**
     * @var AppCredentialsInterface
     */
    private $credentials;
    /**
     * @var LoggerInterface|null
     */
    private $logger;
    /**
     * @var ClientInterface|null
     */
    private $httpClient;

    public function __construct(
        AppCredentialsInterface $credentials,
        ?LoggerInterface $logger = null,
        ?ClientInterface $httpClient = null
    )
    {
        $this->credentials = $credentials;
        $this->logger = $logger;
        $this->httpClient = $httpClient ?? Client::createWithConfig([]);
    }

    /**
     * {@inheritDoc}
     */
    public function restRequest(RequestInterface $request, array $logContext = []): ResponseInterface
    {
        if ($this->credentials->isSandbox()) {
            $request = $request->withUri(SandboxUri::prep($request->getUri()));
        }

        $response = $this->httpClient->sendRequest($request);

        LogFactory::log($this->logger, $logContext, $request, $response);

        return $response;
    }

    /**
     * {@inheritDoc}
     */
    public function soapRequest($requestObject, ?string $sessionId = null, array $logContext = [])
    {
        if (!is_object($requestObject)) {
            throw new \InvalidArgumentException(
                "\$requestObject should be an object from Imper86\AllegroRestApiSdk\Model\SoapWsdl namespace"
            );
        }

        $service = SoapService::get($this->credentials->isSandbox());

        try {
            if (method_exists($requestObject, 'setWebapiKey')) {
                $requestObject->setWebapiKey($this->credentials->getClientId());
            }

            if ($sessionId) {
                if (method_exists($requestObject, 'setSessionId')) {
                    $requestObject->setSessionId($sessionId);
                }

                if (method_exists($requestObject, 'setSessionHandle')) {
                    $requestObject->setSessionHandle($sessionId);
                }
            }

            $reflection = new \ReflectionClass($requestObject);
            $methodName = lcfirst($reflection->getShortName());
            $methodName = substr($methodName, 0, strlen($methodName) - strlen('Request'));

            $response = $service->{$methodName}($requestObject);

            SoapLogFactory::log($this->logger, $service, null, $logContext);

            return $response;
        } catch (\SoapFault $exception) {
            SoapLogFactory::log($this->logger, $service, $exception, $logContext);

            throw $exception;
        }
    }
}
