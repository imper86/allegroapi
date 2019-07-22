<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 06.07.19
 * Time: 13:40
 */

namespace Imper86\AllegroRestApiSdk;


use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Promise\PromiseInterface;
use Imper86\AllegroRestApiSdk\Model\Credentials\AppCredentialsInterface;
use Imper86\AllegroRestApiSdk\Model\SoapWsdl\ServiceService;
use Imper86\AllegroRestApiSdk\Service\AuthServiceInterface;
use Imper86\AllegroRestApiSdk\Service\Container;
use Imper86\AllegroRestApiSdk\Service\Factory\TokenBundleFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Log\LoggerInterface;
use ReflectionClass;
use SoapFault;

class AllegroRestApiSdk implements AllegroRestApiSdkInterface
{
    /**
     * @var AppCredentialsInterface
     */
    private $appCredentials;
    /**
     * @var Container
     */
    private $container;
    /**
     * @var LoggerInterface|null
     */
    private $logger;

    public function __construct(AppCredentialsInterface $appCredentials, ?LoggerInterface $logger = null)
    {
        $this->appCredentials = $appCredentials;
        $this->container = new Container($appCredentials, $logger);
        $this->logger = $logger;
    }

    public function getAuthService(): AuthServiceInterface
    {
        return $this->container->getAuthService();
    }

    public function getTokenBundleFactory(): TokenBundleFactoryInterface
    {
        return $this->container->getTokenBundleFactory();
    }

    public function sendRequest(RequestInterface $request, array $options = [], array $logContext = []): ResponseInterface
    {
        try {
            $request = $this->prepareRequest($request);
            $response = $this->container->getHttpClient()->send($request, $options);

            $this->container->getLogFactory()->create($request, $response, $logContext);

            return $response;
        } catch (BadResponseException $exception) {
            $this->container->getLogFactory()->create($exception->getRequest(), $exception->getResponse(), $logContext);

            throw $exception;
        }
    }

    public function sendAsyncRequest(RequestInterface $request, array $options = [], array $logContext = []): PromiseInterface
    {
        try {
            $request = $this->prepareRequest($request);
            $response = $this->container->getHttpClient()->sendAsync($request, $options);

            $this->container->getLogFactory()->create($request, null, $logContext);

            return $response;
        } catch (BadResponseException $exception) {
            $this->container->getLogFactory()->create($exception->getRequest(), $exception->getResponse(), $logContext);

            throw $exception;
        }
    }

    public function sendSoapRequest($request, array $logContext = [])
    {
        try {
            if (is_object($request) && method_exists($request, 'setWebapiKey')) {
                $request->setWebapiKey($this->appCredentials->getClientId());
            }

            $reflection = new ReflectionClass($request);
            $methodName = lcfirst($reflection->getShortName());
            $methodName = substr($methodName, 0, strlen($methodName) - strlen('Request'));

            $response = $this->soap()->{$methodName}($request);

            $this->container->getLogFactory()->createFromSoap($this->soap(), null, $logContext);

            return $response;
        } catch (SoapFault $fault) {
            $this->container->getLogFactory()->createFromSoap($this->soap(), $fault, $logContext);

            throw $fault;
        }
    }

    public function soap(): ServiceService
    {
        return $this->container->getSoapService();
    }

    private function prepareRequest(RequestInterface $request): RequestInterface
    {
        if (!empty($request->getUri()->getHost())) {
            return $request;
        }

        $uri = $request->getUri()
            ->withHost($this->appCredentials->isSandbox() ? self::API_SANDBOX_HOST : self::API_HOST)
            ->withScheme('https');

        return $request->withUri($uri);
    }
}
