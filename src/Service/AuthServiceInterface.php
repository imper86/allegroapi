<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 06.07.19
 * Time: 14:23
 */

namespace Imper86\AllegroRestApiSdk\Service;




use Imper86\AllegroRestApiSdk\Model\Auth\TokenBundleInterface;
use Imper86\AllegroRestApiSdk\Model\SoapWsdl\doLoginWithAccessTokenResponse;
use Lcobucci\JWT\Token;

/**
 * Interface AuthServiceInterface
 * @package Imper86\AllegroRestApiSdk\Service
 */
interface AuthServiceInterface
{
    const OAUTH_URI = 'https://allegro.pl/auth/oauth';
    const OAUTH_SANDBOX_URI = 'https://allegro.pl.allegrosandbox.pl/auth/oauth';

    /**
     * @return string
     */
    public function getAuthUrl(): string;

    /**
     * @param string $authCode
     * @param array $logContext
     * @return TokenBundleInterface
     */
    public function generateTokenBundle(string $authCode, array $logContext = []): TokenBundleInterface;

    /**
     * @param string|Token $refreshToken
     * @param array $logContext
     * @return TokenBundleInterface
     */
    public function refreshToken($refreshToken, array $logContext = []): TokenBundleInterface;

    /**
     * @param $accessToken
     * @param array $logContext
     * @return doLoginWithAccessTokenResponse
     */
    public function generateSoapToken($accessToken, array $logContext = []): doLoginWithAccessTokenResponse;
}
