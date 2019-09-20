<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 20.09.2019
 * Time: 10:51
 */

namespace Imper86\AllegroRestApiSdk;


use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Uri;
use Http\Adapter\Guzzle6\Client;
use Imper86\AllegroRestApiSdk\Constants\EndpointHost;
use Imper86\AllegroRestApiSdk\Helper\LogFactory;
use Imper86\AllegroRestApiSdk\Helper\SandboxUri;
use Imper86\AllegroRestApiSdk\Helper\SoapLogFactory;
use Imper86\AllegroRestApiSdk\Helper\SoapService;
use Imper86\AllegroRestApiSdk\Helper\TokenBundleFactory;
use Imper86\AllegroRestApiSdk\Model\Auth\TokenBundleInterface;
use Imper86\AllegroRestApiSdk\Model\Credentials\AppCredentialsInterface;
use Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoLoginWithAccessTokenRequest;
use Imper86\AllegroRestApiSdk\Model\SoapWsdl\doLoginWithAccessTokenResponse;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\UriInterface;
use Psr\Log\LoggerInterface;
use function GuzzleHttp\Psr7\build_query;

/**
 * Class AllegroAuth
 * @package Imper86\AllegroRestApiSdk
 */
class AllegroAuth implements AllegroAuthInterface
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
    public function createAuthUrl(): string
    {
        $host = EndpointHost::OAUTH;
        $query = build_query([
            'response_type' => 'code',
            'client_id' => $this->credentials->getClientId(),
            'redirect_uri' => $this->credentials->getRedirectUri(),
            'prompt' => 'confirm',
        ]);
        $uri = new Uri("https://{$host}/auth/oauth/authorize?{$query}");

        return (string)($this->credentials->isSandbox() ? SandboxUri::prep($uri) : $uri);
    }

    /**
     * {@inheritDoc}
     */
    public function fetchTokenFromCode(string $code, array $logContext = []): TokenBundleInterface
    {
        $query = build_query([
            'grant_type' => 'authorization_code',
            'code' => $code,
            'redirect_uri' => $this->credentials->getRedirectUri(),
        ]);

        $request = new Request('POST', $this->prepareTokenUri($query), $this->prepareHeaders());
        $response = $this->httpClient->sendRequest($request);

        LogFactory::log($this->logger, $logContext, $request, $response);

        if ($response->getStatusCode() >= 400) {
            throw new BadResponseException("Bad response", $request, $response);
        }

        return TokenBundleFactory::buildFromResponse($response);
    }

    /**
     * {@inheritDoc}
     */
    public function fetchTokenFromRefresh($refreshToken, array $logContext = []): TokenBundleInterface
    {
        $query = build_query([
            'grant_type' => 'refresh_token',
            'refresh_token' => (string)$refreshToken,
            'redirect_uri' => $this->credentials->getRedirectUri(),
        ]);

        $request = new Request('POST', $this->prepareTokenUri($query), $this->prepareHeaders());
        $response = $this->httpClient->sendRequest($request);

        LogFactory::log($this->logger, $logContext, $request, $response);

        if ($response->getStatusCode() >= 400) {
            throw new BadResponseException("Bad response", $request, $response);
        }

        return TokenBundleFactory::buildFromResponse($response);
    }

    /**
     * {@inheritDoc}
     */
    public function fetchSoapSessionId($accessToken, array $logContext = []): doLoginWithAccessTokenResponse
    {
        $service = SoapService::get($this->credentials->isSandbox());

        try {
            $response = $service->doLoginWithAccessToken(
                new DoLoginWithAccessTokenRequest((string)$accessToken, 1, $this->credentials->getClientId())
            );

            SoapLogFactory::log($this->logger, $service, null, $logContext);

            return $response;
        } catch (\SoapFault $exception) {
            SoapLogFactory::log($this->logger, $service, $exception, $logContext);

            throw $exception;
        }
    }

    /**
     * @param string $query
     * @return UriInterface
     */
    private function prepareTokenUri(string $query): UriInterface
    {
        $host = EndpointHost::OAUTH;
        $uri = new Uri("https://{$host}/auth/oauth/token?{$query}");

        return $this->credentials->isSandbox() ? SandboxUri::prep($uri) : $uri;
    }

    /**
     * @return array
     */
    private function prepareHeaders(): array
    {
        $basicAuthString = base64_encode("{$this->credentials->getClientId()}:{$this->credentials->getClientSecret()}");

        return [
            'Authorization' => "Basic {$basicAuthString}",
        ];
    }
}
