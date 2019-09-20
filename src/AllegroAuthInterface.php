<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 20.09.2019
 * Time: 10:43
 */

namespace Imper86\AllegroRestApiSdk;


use Imper86\AllegroRestApiSdk\Model\Auth\TokenBundleInterface;
use Imper86\AllegroRestApiSdk\Model\SoapWsdl\doLoginWithAccessTokenResponse;
use Lcobucci\JWT\Token;

/**
 * Interface AllegroAuthInterface
 * @package Imper86\AllegroRestApiSdk
 */
interface AllegroAuthInterface
{
    /**
     * @return string
     */
    public function createAuthUrl(): string;

    /**
     * @param string $code
     * @param array $logContext
     * @return TokenBundleInterface
     */
    public function fetchTokenFromCode(string $code, array $logContext = []): TokenBundleInterface;

    /**
     * @param string|Token $refreshToken
     * @param array $logContext
     * @return TokenBundleInterface
     */
    public function fetchTokenFromRefresh($refreshToken, array $logContext = []): TokenBundleInterface;

    /**
     * @param string|Token $accessToken
     * @param array $logContext
     * @return doLoginWithAccessTokenResponse
     */
    public function fetchSoapSessionId($accessToken, array $logContext = []): doLoginWithAccessTokenResponse;
}
