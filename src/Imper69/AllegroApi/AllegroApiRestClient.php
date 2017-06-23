<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 14:27
 */

namespace Imper69\AllegroApi;


use Imper69\AllegroApi\Rest\Exception\NoTokenException;
use Imper69\AllegroApi\Rest\Model\Auth\TokenInterface;
use Imper69\AllegroApi\Rest\Service\AfterSalesServiceConditons\AfterSalesServicesConditionsService;
use Imper69\AllegroApi\Rest\Service\AfterSalesServiceConditons\AfterSalesServicesConditionsServiceInterface;
use Imper69\AllegroApi\Rest\Service\Auth\AuthService;
use Imper69\AllegroApi\Rest\Service\Auth\AuthServiceInterface;
use Imper69\AllegroApi\Rest\Service\ChangePrice\ChangePriceService;
use Imper69\AllegroApi\Rest\Service\ChangePrice\ChangePriceServiceInterface;
use Imper69\AllegroApi\Rest\Service\HttpClient\HttpClientService;
use Imper69\AllegroApi\Rest\Service\HttpClient\HttpClientServiceInterface;
use Imper69\AllegroApi\Rest\Service\Ratings\SellersRatingsService;
use Imper69\AllegroApi\Rest\Service\Ratings\SellersRatingsServiceInterface;
use Imper69\Curl\CurlClient;
use Imper69\Curl\CurlClientInterface;

class AllegroApiRestClient implements AllegroApiRestClientInterface
{
    /**
     * @var CredentialsInterface
     */
    private $credentials;

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

    /**
     * @var SellersRatingsServiceInterface
     */
    private $sellersRatingsService;


    public function __construct(CredentialsInterface $credentials, TokenInterface $token = null)
    {
        $this->credentials = $credentials;
        $this->token = $token;
    }

    public function getToken(): ?TokenInterface
    {
        return $this->token;
    }

    public function setToken(TokenInterface $token)
    {
        $this->token = $token;
    }

    public function refreshToken()
    {
        if (empty($this->token)) throw new NoTokenException();

        $newToken = $this->getAuthService()->refreshToken($this->token);
        $this->token = $newToken;
    }

    private function getCurlClient(): CurlClientInterface
    {
        return new CurlClient();
    }

    private function getHttpClient(): HttpClientServiceInterface
    {
        if (empty($this->token)) throw new NoTokenException();

        if (is_null($this->httpClient)) {
            $this->httpClient = new HttpClientService($this->getCurlClient(), $this->token, $this->credentials);
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

    public function getSellersRatingsService(): SellersRatingsServiceInterface
    {
        if (is_null($this->sellersRatingsService)) {
            $this->sellersRatingsService = new SellersRatingsService($this->getHttpClient());
        }

        return $this->sellersRatingsService;
    }


}