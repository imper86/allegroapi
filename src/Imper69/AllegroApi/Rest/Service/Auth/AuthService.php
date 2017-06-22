<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 11:49
 */

namespace Imper69\AllegroApi\Rest\Service\Auth;


use Imper69\AllegroApi\AccountInterface;
use Imper69\AllegroApi\Rest\Model\Auth\Token;
use Imper69\AllegroApi\Rest\Model\Auth\TokenInterface;
use Imper69\Curl\CurlClientInterface;
use Imper69\Curl\CurlClient;

class AuthService implements AuthServiceInterface
{
    const ALLEGRO_OAUTH_URL = 'https://ssl.allegro.pl/auth/oauth';

    /**
     * @var AccountInterface
     */
    private $account;

    /**
     * @var CurlClientInterface
     */
    private $curl;

    public function __construct(AccountInterface $account, CurlClientInterface $curl)
    {
        $curl->setBaseUrl(self::ALLEGRO_OAUTH_URL);
        $curl->setBasicAuthentication(
            $account->getAllegroApiRestClientId(),
            $account->getAllegroApiRestClientSecret()
        );

        $this->account = $account;
        $this->curl = $curl;
    }

    /**
     * Zwraca instancję Curla z ustawionymi nagłówkami do logowania.
     *
     * @return CurlClientInterface
     */
    private function getAuthorizedCurl(): CurlClientInterface
    {
        if (is_null($this->curl)) {
            $this->curl = new CurlClient(self::ALLEGRO_OAUTH_URL);
            $this->curl->setBasicAuthentication(
                $this->account->getAllegroApiRestClientId(),
                $this->account->getAllegroApiRestClientSecret()
            );
        }

        return $this->curl;
    }

    public function getAuthUrl(): string
    {
        $clientId = $this->account->getAllegroApiRestClientId();
        $apiKey = $this->account->getAllegroApiRestApiKey();
        $redirectUri = $this->account->getAllegroApiRestRedirectUri();

        return self::ALLEGRO_OAUTH_URL . "/authorize?response_type=code&client_id={$clientId}&api-key={$apiKey}&redirect_uri={$redirectUri}";
    }

    public function getNewToken(string $authCode): TokenInterface
    {
        $curl = $this->getAuthorizedCurl();

        $response = $curl->post("/token?grant_type=authorization_code&code={$authCode}&api-key={$this->account->getAllegroApiRestApiKey()}&redirect_uri={$this->account->getAllegroApiRestRedirectUri()}");

        return new Token($response);
    }

    public function refreshToken(TokenInterface $token): TokenInterface
    {
        $curl = $this->getAuthorizedCurl();

        $response = $curl->post("/token?grant_type=refresh_token&refresh_token={$token->getRefreshToken()}&redirect_uri={$this->account->getAllegroApiRestRedirectUri()}");

        return new Token($response);
    }

}