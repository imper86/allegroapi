<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 11:49
 */

namespace Imper86\AllegroApi\Rest\Service\Auth;


use GuzzleHttp\Client;
use Imper86\AllegroApi\CredentialsInterface;
use Imper86\AllegroApi\Rest\Model\Auth\Token;
use Imper86\AllegroApi\Rest\Model\Auth\TokenInterface;
use Imper86\AllegroApi\RestClientInterface;
use Imper86\Curl\CurlClient;
use Imper86\Curl\CurlClientInterface;

class AuthService implements AuthServiceInterface
{
    /**
     * @var CredentialsInterface
     */
    private $credentials;
    /**
     * @var Client
     */
    private $httpClient;


    public function __construct(CredentialsInterface $credentials, Client $httpClient)
    {
        $this->credentials = $credentials;
        $this->httpClient = $httpClient;
    }

    public function getAuthUrl(): string
    {
        $query = [
            'response_type' => 'code',
            'client_id' => $this->credentials->getRestClientId(),
            'api-key' => $this->credentials->getRestApiKey(),
            'redirect_uri' => $this->credentials->getRestRedirectUri(),
        ];

        return RestClientInterface::OAUTH_URL.'/authorize?'.http_build_query($query);
    }

    public function getNewToken(string $authCode): TokenInterface
    {
        $response = $this->httpClient->post(RestClientInterface::OAUTH_URL.'/token', [
            'auth' => [
                $this->credentials->getRestClientId(),
                $this->credentials->getRestClientSecret(),
            ],
            'query' => [
                'grant_type' => 'authorization_code',
                'code' => $authCode,
                'api-key' => $this->credentials->getRestApiKey(),
                'redirect_uri' => $this->credentials->getRestRedirectUri(),
            ]
        ]);

        return new Token($response);
    }

    public function refreshToken(TokenInterface $token): TokenInterface
    {
        $response = $this->httpClient->post(RestClientInterface::OAUTH_URL.'/token', [
            'auth' => [
                $this->credentials->getRestClientId(),
                $this->credentials->getRestClientSecret(),
            ],
            'query' => [
                'grant_type' => 'refresh_token',
                'refresh_token' => $token->getRefreshToken(),
                'redirect_uri' => $this->credentials->getRestRedirectUri(),
            ]
        ]);

        return new Token($response);
    }

}
