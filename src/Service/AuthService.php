<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 06.07.19
 * Time: 14:32
 */

namespace Imper86\AllegroRestApiSdk\Service;


use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Auth\TokenBundleInterface;
use Imper86\AllegroRestApiSdk\Model\Credentials\AppCredentialsInterface;
use Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoLoginWithAccessTokenRequest;
use Imper86\AllegroRestApiSdk\Model\SoapWsdl\doLoginWithAccessTokenResponse;
use Imper86\AllegroRestApiSdk\Model\SoapWsdl\ServiceService;
use Imper86\AllegroRestApiSdk\Service\Factory\TokenBundleFactoryInterface;

class AuthService implements AuthServiceInterface
{
    /**
     * @var ClientInterface
     */
    private $httpClient;
    /**
     * @var TokenBundleFactoryInterface
     */
    private $tokenBundleFactory;
    /**
     * @var AppCredentialsInterface
     */
    private $appCredentials;
    /**
     * @var ServiceService
     */
    private $soapService;

    public function __construct(
        AppCredentialsInterface $appCredentials,
        ClientInterface $httpClient,
        TokenBundleFactoryInterface $tokenBundleFactory,
        ServiceService $soapService
    )
    {
        $this->httpClient = $httpClient;
        $this->tokenBundleFactory = $tokenBundleFactory;
        $this->appCredentials = $appCredentials;
        $this->soapService = $soapService;
    }

    /**
     * @inheritDoc
     */
    public function getAuthUrl(): string
    {
        $query = http_build_query([
            'response_type' => 'code',
            'client_id' => $this->appCredentials->getClientId(),
            'redirect_uri' => $this->appCredentials->getRedirectUri(),
            'prompt' => 'confirm',
        ]);

        return $this->getUriForCredentials() . '/authorize?' . $query;
    }

    /**
     * @inheritDoc
     */
    public function generateTokenBundle(string $authCode): TokenBundleInterface
    {
        $query = http_build_query([
            'grant_type' => 'authorization_code',
            'code' => $authCode,
            'redirect_uri' => $this->appCredentials->getRedirectUri(),
        ]);
        $uri = $this->getUriForCredentials() . '/token?' . $query;

        $request = new Request('POST', $uri, $this->getHttpHeaders());
        $response = $this->httpClient->send($request);

        return $this->tokenBundleFactory->buildFromResponse($response);
    }

    /**
     * @inheritDoc
     */
    public function refreshToken($refreshToken): TokenBundleInterface
    {
        $query = http_build_query([
            'grant_type' => 'refresh_token',
            'refresh_token' => (string)$refreshToken,
            'redirect_uri' => $this->appCredentials->getRedirectUri(),
        ]);
        $uri = $this->getUriForCredentials() . '/token?' . $query;

        $request = new Request('POST', $uri, $this->getHttpHeaders());
        $response = $this->httpClient->send($request);

        return $this->tokenBundleFactory->buildFromResponse($response);
    }

    public function generateSoapToken($accessToken): doLoginWithAccessTokenResponse
    {
        return $this->soapService->doLoginWithAccessToken(
            new DoLoginWithAccessTokenRequest(
                (string)$accessToken,
                1,
                $this->appCredentials->getClientId()
            )
        );
    }

    private function getUriForCredentials(): string
    {
        return $this->appCredentials->isSandbox() ? self::OAUTH_SANDBOX_URI : self::OAUTH_URI;
    }

    private function getHttpHeaders(): array
    {
        $basicAuthString = base64_encode("{$this->appCredentials->getClientId()}:{$this->appCredentials->getClientSecret()}");

        return [
            'Authorization' => "Basic {$basicAuthString}",
        ];
    }
}
