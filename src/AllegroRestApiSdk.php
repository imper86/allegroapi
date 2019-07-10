<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 06.07.19
 * Time: 13:40
 */

namespace Imper86\AllegroRestApiSdk;


use GuzzleHttp\Promise\PromiseInterface;
use Imper86\AllegroRestApiSdk\Model\Credentials\AppCredentialsInterface;
use Imper86\AllegroRestApiSdk\Service\AuthServiceInterface;
use Imper86\AllegroRestApiSdk\Service\Container;
use Imper86\AllegroRestApiSdk\Service\Factory\TokenBundleFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

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

    public function __construct(AppCredentialsInterface $appCredentials)
    {
        $this->appCredentials = $appCredentials;
        $this->container = new Container($appCredentials);
    }

    public function getAuthService(): AuthServiceInterface
    {
        return $this->container->getAuthService();
    }

    public function getTokenBundleFactory(): TokenBundleFactoryInterface
    {
        return $this->container->getTokenBundleFactory();
    }

    public function sendRequest(RequestInterface $request, array $options = []): ResponseInterface
    {
        return $this->container->getHttpClient()->send($this->prepareRequest($request), $options);
    }

    public function sendAsyncRequest(RequestInterface $request, array $options = []): PromiseInterface
    {
        return $this->container->getHttpClient()->sendAsync($this->prepareRequest($request), $options);
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
