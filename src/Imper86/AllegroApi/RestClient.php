<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 14:27
 */

namespace Imper86\AllegroApi;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Psr7\Request;
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
    /**
     * @var \Psr\Http\Message\RequestInterface
     */
    private $lastHttpRequest;
    /**
     * @var ResponseInterface
     */
    private $lastHttpResponse;

    public function __construct(CredentialsInterface $credentials)
    {
        $this->credentials = $credentials;
    }

    private function getHttpClient(): Client
    {
        if (null === $this->httpClient) {
            $this->httpClient = new Client(['base_uri' => RestClientInterface::REST_API_URL]);
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

    public function sendRequest(
        TokenInterface $token,
        RequestInterface $request,
        array $guzzleOptions = []
    ): ResponseInterface {
        try {
            $httpRequest = new Request(
                $request->getMethod(),
                $request->getUri().'?'.http_build_query($request->getQuery()),
                $this->prepareHeaders($token, $request),
                empty($request->getBody()) ? null : json_encode($request->getBody())
            );

            $this->lastHttpRequest = $httpRequest;

            $response = $this->getHttpClient()->send($httpRequest, $guzzleOptions);

            $this->lastHttpResponse = $response;

            return $response;
        } catch (ClientException $clientException) {
            $this->lastHttpResponse = $clientException->getResponse();

            if (401 == $clientException->getCode()) {
                throw new UnauthorizedClientException($clientException);
            }

            throw $clientException;
        }
    }

    private function prepareHeaders(TokenInterface $token, RequestInterface $request)
    {
        $contentType = null === $request->getContentType()
            ? RestClientInterface::CONTENT_TYPE_PUBLIC
            : $request->getContentType();

        return [
            'Authorization' => 'Bearer '.$token->getAccessToken(),
            'Api-Key' => $this->credentials->getRestApiKey(),
            'Accept' => $contentType,
            'Content-Type' => $contentType,
        ];
    }

    public function getLastHttpRequest(): ?\Psr\Http\Message\RequestInterface
    {
        return $this->lastHttpRequest;
    }

    public function getLastHttpResponse(): ?ResponseInterface
    {
        return $this->lastHttpResponse;
    }


}
