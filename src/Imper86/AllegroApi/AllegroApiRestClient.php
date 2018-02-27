<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 14:27
 */

namespace Imper86\AllegroApi;


use GuzzleHttp\Client;
use Imper86\AllegroApi\Rest\Model\Auth\TokenInterface;
use Imper86\AllegroApi\Rest\Service\Auth\AuthService;
use Imper86\AllegroApi\Rest\Service\Auth\AuthServiceInterface;
use Imper86\Curl\CurlClient;
use Imper86\Curl\CurlClientInterface;
use Psr\Http\Message\ResponseInterface;

class AllegroApiRestClient implements AllegroApiRestClientInterface
{
    /**
     * @var CredentialsInterface
     */
    private $credentials;
    /**
     * @var AuthServiceInterface
     */
    private $authService;
    /**
     * @var Client
     */
    private $httpClient;

    public function __construct(CredentialsInterface $credentials)
    {
        $this->credentials = $credentials;
    }

    private function getCurlClient(): CurlClientInterface
    {
        return new CurlClient();
    }

    private function getHttpClient(): Client
    {
        if (null === $this->httpClient) {
            $this->httpClient = new Client([
                'base_uri' => 'https://api.allegro.pl',
            ]);
        }

        return $this->httpClient;
    }

    public function getAuthService(): AuthServiceInterface
    {
        if (is_null($this->authService)) {
            $this->authService = new AuthService($this->credentials, $this->getCurlClient());
        }

        return $this->authService;
    }

    public function get(TokenInterface $token, string $uri, array $parameters = []): ResponseInterface
    {
        $httpClient = $this->getHttpClient();

        return $httpClient->get($this->prepareUri($uri), [
            'headers' => $this->prepareHeaders($token),
            'query' => $parameters,
        ]);
    }

    public function post(TokenInterface $token, string $uri, array $parameters = []): ResponseInterface
    {
        return $this->getHttpClient()->post(
            $this->prepareUri($uri),
            [
                'headers' => $this->prepareHeaders($token),
                'json' => $parameters,
            ]
        );
    }

    public function put(TokenInterface $token, string $uri, array $parameters = []): ResponseInterface
    {
        return $this->getHttpClient()->put(
            $this->prepareUri($uri),
            [
                'headers' => $this->prepareHeaders($token),
                'json' => $parameters,
            ]
        );
    }

    public function delete(TokenInterface $token, string $uri, array $parameters = []): ResponseInterface
    {
        return $this->getHttpClient()->delete(
            $this->prepareUri($uri),
            [
                'headers' => $this->prepareHeaders($token),
                'query' => $parameters,
            ]
        );
    }

    private function prepareUri(string $uri): string
    {
        if ('/' === substr($uri, 0, 1)) {
            return substr($uri, 1);
        }

        if ('http' === substr($uri, 0, 4)) {
            throw new \Exception('Please provide just URI, eg. sale/offer-additional-services/groups');
        }

        return $uri;
    }

    private function prepareHeaders(TokenInterface $token)
    {
        return [
            'Authorization' => 'Bearer '.$token->getAccessToken(),
            'Api-Key' => $this->credentials->getAllegroApiRestApiKey(),
            'Accept' => 'application/vnd.allegro.public.v1+json',
            'Content-Type' => 'application/vnd.allegro.public.v1+json',
        ];
    }
}