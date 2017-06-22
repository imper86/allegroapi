<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 13:30
 */

namespace Imper69\AllegroApi\Rest\Service\HttpClient;


use Imper69\AllegroApi\AccountInterface;
use Imper69\AllegroApi\Rest\Model\Auth\TokenInterface;
use Imper69\AllegroApi\Rest\Model\Http\RequestInterface;
use Imper69\Curl\CurlClientInterface;
use Imper69\Curl\Model\ResponseInterface as CurlResponseInterface;

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
     * @var AccountInterface
     */
    private $account;


    public function __construct(CurlClientInterface $curlClient, TokenInterface $token, AccountInterface $account)
    {
        $curlClient->setBaseUrl('https://allegroapi.io');
        $curlClient->setHeader('Authorization', "Bearer {$token->getAccessToken()}");
        $curlClient->setHeader('Api-Key', $account->getAllegroApiRestApiKey());
        $curlClient->setHeader('Accept', 'application/vnd.allegro.public.v1+json');
        $curlClient->setHeader('Content-Type', 'application/vnd.allegro.public.v1+json');

        $this->curl = $curlClient;
        $this->token = $token;
        $this->account = $account;
    }

    public function sendRequest(RequestInterface $request): CurlResponseInterface
    {
        return $this->curl->{$request->getMethod()}($request->getUri(), $request->getData());
    }

}