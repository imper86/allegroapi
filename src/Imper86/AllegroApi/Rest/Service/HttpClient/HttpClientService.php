<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 13:30
 */

namespace Imper86\AllegroApi\Rest\Service\HttpClient;


use Imper86\AllegroApi\CredentialsInterface;
use Imper86\AllegroApi\Rest\Model\Auth\TokenInterface;
use Imper86\AllegroApi\Rest\Model\Http\RequestInterface;
use Imper86\Curl\CurlClientInterface;
use Imper86\Curl\Model\ResponseInterface as CurlResponseInterface;

class HttpClientService implements HttpClientServiceInterface
{
    /**
     * @var CurlClientInterface
     */
    private $curl;

    /**
     * @var TokenInterface
     */
    private $token;

    /**
     * @var CredentialsInterface
     */
    private $credentials;


    public function __construct(CurlClientInterface $curlClient, TokenInterface $token, CredentialsInterface $credentials)
    {
        $curlClient->setBaseUrl('https://allegroapi.io');
        $curlClient->setHeader('Authorization', "Bearer {$token->getAccessToken()}");
        $curlClient->setHeader('Api-Key', $credentials->getAllegroApiRestApiKey());

        $this->curl = $curlClient;
        $this->token = $token;
        $this->credentials = $credentials;
    }

    public function sendRequest(RequestInterface $request): CurlResponseInterface
    {
        if (!is_null($request->getContentType())) {
            $this->curl->setHeader('Accept', $request->getContentType());
            $this->curl->setHeader('Content-Type', $request->getContentType());
        } else {
            $this->curl->setHeader('Accept', 'application/vnd.allegro.public.v1+json');
            $this->curl->setHeader('Content-Type', 'application/vnd.allegro.public.v1+json');
        }

        return $this->curl->{$request->getMethod()}($request->getUri(), $request->getData());
    }

}