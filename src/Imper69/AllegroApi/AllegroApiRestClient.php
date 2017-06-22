<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 14:27
 */

namespace Imper69\AllegroApi;


use Imper69\AllegroApi\Rest\Model\Auth\TokenInterface;
use Imper69\AllegroApi\Rest\Service\AfterSalesServiceConditons\AfterSalesServicesConditionsService;
use Imper69\AllegroApi\Rest\Service\AfterSalesServiceConditons\AfterSalesServicesConditionsServiceInterface;
use Imper69\AllegroApi\Rest\Service\Auth\AuthService;
use Imper69\AllegroApi\Rest\Service\Auth\AuthServiceInterface;
use Imper69\AllegroApi\Rest\Service\ChangePrice\ChangePriceService;
use Imper69\AllegroApi\Rest\Service\ChangePrice\ChangePriceServiceInterface;
use Imper69\AllegroApi\Rest\Service\HttpClient\HttpClientService;
use Imper69\AllegroApi\Rest\Service\HttpClient\HttpClientServiceInterface;
use Imper69\Core\Curl\Curl;
use Imper69\Core\Curl\CurlClientInterface;

class AllegroApiRestClient implements AllegroApiRestClientInterface
{
    /**
     * @var AccountInterface
     */
    private $account;

    /**
     * @var TokenInterface
     */
    private $token;

    /**
     * @var HttpClientServiceInterface
     */
    private $httpClient;

    /**
     * @var AuthServiceInterface
     */
    private $authService;

    /**
     * @var ChangePriceServiceInterface
     */
    private $changePriceService;

    /**
     * @var AfterSalesServicesConditionsServiceInterface
     */
    private $afterSalesServiceConditionsService;


    public function __construct(AccountInterface $account, TokenInterface $token = null)
    {
        $this->account = $account;
        $this->token = $token;
    }

    public function getToken(): TokenInterface
    {
        return $this->token;
    }

    public function setToken(TokenInterface $token)
    {
        $this->setToken($token);
    }

    public function refreshToken()
    {
        $newToken = $this->getAuthService()->refreshToken($this->token);
        $this->token = $newToken;
    }

    private function getCurlClient(): CurlClientInterface
    {
        return new Curl();
    }

    private function getHttpClient(): HttpClientServiceInterface
    {
        if (is_null($this->httpClient)) {
            $this->httpClient = new HttpClientService($this->getCurlClient(), $this->token, $this->account);
        }

        return $this->httpClient;
    }

    public function getAuthService(): AuthServiceInterface
    {
        if (is_null($this->authService)) {
            $this->authService = new AuthService($this->account, $this->getCurlClient());
        }

        return $this->authService;
    }

    public function getChangePriceService(): ChangePriceServiceInterface
    {
        if (is_null($this->changePriceService)) {
            $this->changePriceService = new ChangePriceService($this->getHttpClient());
        }

        return $this->changePriceService;
    }

    public function getAfterSalesServiceConditionsService(): AfterSalesServicesConditionsServiceInterface
    {
        if (is_null($this->afterSalesServiceConditionsService)) {
            $this->afterSalesServiceConditionsService = new AfterSalesServicesConditionsService($this->getHttpClient());
        }

        return $this->afterSalesServiceConditionsService;
    }

}