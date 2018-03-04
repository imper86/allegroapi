<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 14:27
 */

namespace Imper86\AllegroApi;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Imper86\AllegroApi\Rest\Exception\InvalidRequestMethodException;
use Imper86\AllegroApi\Rest\Exception\UnauthorizedClientException;
use Imper86\AllegroApi\Rest\Model\Auth\TokenInterface;
use Imper86\AllegroApi\Rest\Model\RequestInterface;
use Imper86\AllegroApi\Rest\Service\Auth\AuthService;
use Imper86\AllegroApi\Rest\Service\Auth\AuthServiceInterface;
use Psr\Http\Message\ResponseInterface;

class RestClient implements RestClientInterface
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
            $this->authService = new AuthService($this->credentials, $this->getHttpClient());
        }

        return $this->authService;
    }

    public function sendRequest(TokenInterface $token, RequestInterface $request): ResponseInterface
    {
        switch ($request->getRequestMethod()) {
            case 'GET': $requestKey = 'query'; break;
            case 'POST': $requestKey = 'json'; break;
            case 'PUT': $requestKey = 'json'; break;
            case 'DELETE': $requestKey = 'query'; break;
            default: throw new InvalidRequestMethodException();
        }

        try {
            $response = $this->getHttpClient()->request(
                $request->getRequestMethod(),
                $request->getRequestUri(),
                [
                    'headers' => $this->prepareHeaders($token, $request),
                    $requestKey => $request->getRequestArray()
                ]
            );

            return $response;
        } catch (ClientException $clientException) {
            if (401 == $clientException->getCode()) {
                throw new UnauthorizedClientException($clientException);
            }

            throw $clientException;
        }
    }

    private function prepareHeaders(TokenInterface $token, RequestInterface $request)
    {
        $contentType = null === $request->getContentType()
            ? 'application/vnd.allegro.public.v1+json'
            : $request->getContentType();

        return [
            'Authorization' => 'Bearer '.$token->getAccessToken(),
            'Api-Key' => $this->credentials->getAllegroApiRestApiKey(),
            'Accept' => $contentType,
            'Content-Type' => $contentType,
        ];
    }
}