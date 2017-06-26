<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 11:49
 */

namespace Imper86\AllegroApi\Rest\Service\Auth;


use Imper86\AllegroApi\CredentialsInterface;
use Imper86\AllegroApi\Rest\Model\Auth\Token;
use Imper86\AllegroApi\Rest\Model\Auth\TokenInterface;
use Imper86\Curl\CurlClientInterface;
use Imper86\Curl\CurlClient;

class AuthService implements AuthServiceInterface
{
    const ALLEGRO_OAUTH_URL = 'https://ssl.allegro.pl/auth/oauth';

    /**
     * @var CredentialsInterface
     */
    private $credentials;

    /**
     * @var CurlClientInterface
     */
    private $curl;

    public function __construct(CredentialsInterface $credentials, CurlClientInterface $curl)
    {
        $curl->setBaseUrl(self::ALLEGRO_OAUTH_URL);
        $curl->setBasicAuthentication(
            $credentials->getAllegroApiRestClientId(),
            $credentials->getAllegroApiRestClientSecret()
        );

        $this->credentials = $credentials;
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
                $this->credentials->getAllegroApiRestClientId(),
                $this->credentials->getAllegroApiRestClientSecret()
            );
        }

        return $this->curl;
    }

    public function getAuthUrl(): string
    {
        $clientId = $this->credentials->getAllegroApiRestClientId();
        $apiKey = $this->credentials->getAllegroApiRestApiKey();
        $redirectUri = $this->credentials->getAllegroApiRestRedirectUri();

        return self::ALLEGRO_OAUTH_URL . "/authorize?response_type=code&client_id={$clientId}&api-key={$apiKey}&redirect_uri={$redirectUri}";
    }

    public function getNewToken(string $authCode): TokenInterface
    {
        $curl = $this->getAuthorizedCurl();

        $response = $curl->post("/token?grant_type=authorization_code&code={$authCode}&api-key={$this->credentials->getAllegroApiRestApiKey()}&redirect_uri={$this->credentials->getAllegroApiRestRedirectUri()}");

        return new Token($response);
    }

    public function refreshToken(TokenInterface $token): TokenInterface
    {
        $curl = $this->getAuthorizedCurl();

        $response = $curl->post("/token?grant_type=refresh_token&refresh_token={$token->getRefreshToken()}&redirect_uri={$this->credentials->getAllegroApiRestRedirectUri()}");

        return new Token($response);
    }

}