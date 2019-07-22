<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 06.07.19
 * Time: 14:32
 */

namespace Imper86\AllegroRestApiSdk\Service;


use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Auth\TokenBundleInterface;
use Imper86\AllegroRestApiSdk\Model\Credentials\AppCredentialsInterface;
use Imper86\AllegroRestApiSdk\Model\SoapWsdl\DoLoginWithAccessTokenRequest;
use Imper86\AllegroRestApiSdk\Model\SoapWsdl\doLoginWithAccessTokenResponse;
use Imper86\AllegroRestApiSdk\Model\SoapWsdl\ServiceService;
use Imper86\AllegroRestApiSdk\Service\Factory\LogFactoryInterface;
use Imper86\AllegroRestApiSdk\Service\Factory\TokenBundleFactoryInterface;
use SoapFault;
use function GuzzleHttp\Psr7\build_query;

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
    /**
     * @var LogFactoryInterface
     */
    private $logFactory;

    public function __construct(
        AppCredentialsInterface $appCredentials,
        ClientInterface $httpClient,
        TokenBundleFactoryInterface $tokenBundleFactory,
        ServiceService $soapService,
        LogFactoryInterface $logFactory
    )
    {
        $this->httpClient = $httpClient;
        $this->tokenBundleFactory = $tokenBundleFactory;
        $this->appCredentials = $appCredentials;
        $this->soapService = $soapService;
        $this->logFactory = $logFactory;
    }

    /**
     * @inheritDoc
     */
    public function getAuthUrl(): string
    {
        $query = build_query([
            'response_type' => 'code',
            'client_id' => $this->appCredentials->getClientId(),
            'redirect_uri' => $this->appCredentials->getRedirectUri(),
            'prompt' => 'confirm',
        ]);

        $url = $this->getUriForCredentials() . '/authorize?' . $query;

        return $url;
    }

    /**
     * @inheritDoc
     */
    public function generateTokenBundle(string $authCode): TokenBundleInterface
    {
        try {
            $query = build_query([
                'grant_type' => 'authorization_code',
                'code' => $authCode,
                'redirect_uri' => $this->appCredentials->getRedirectUri(),
            ]);
            $uri = $this->getUriForCredentials() . '/token?' . $query;

            $request = new Request('POST', $uri, $this->getHttpHeaders());
            $response = $this->httpClient->send($request);

            $this->logFactory->create($request, $response);

            return $this->tokenBundleFactory->buildFromResponse($response);
        } catch (BadResponseException $exception) {
            $this->logFactory->create($exception->getRequest(), $exception->getResponse());

            throw $exception;
        }
    }

    /**
     * @inheritDoc
     */
    public function refreshToken($refreshToken): TokenBundleInterface
    {
        try {
            $query = build_query([
                'grant_type' => 'refresh_token',
                'refresh_token' => (string)$refreshToken,
                'redirect_uri' => $this->appCredentials->getRedirectUri(),
            ]);
            $uri = $this->getUriForCredentials() . '/token?' . $query;

            $request = new Request('POST', $uri, $this->getHttpHeaders());
            $response = $this->httpClient->send($request);

            $this->logFactory->create($request, $response);

            return $this->tokenBundleFactory->buildFromResponse($response);
        } catch (BadResponseException $exception) {
            $this->logFactory->create($exception->getRequest(), $exception->getResponse());
        }
    }

    public function generateSoapToken($accessToken): doLoginWithAccessTokenResponse
    {
        try {
            $response = $this->soapService->doLoginWithAccessToken(
                new DoLoginWithAccessTokenRequest(
                    (string)$accessToken,
                    1,
                    $this->appCredentials->getClientId()
                )
            );

            $this->logFactory->createFromSoap($this->soapService);

            return $response;
        } catch (SoapFault $fault) {
            $this->logFactory->createFromSoap($this->soapService, $fault);

            throw $fault;
        }
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
