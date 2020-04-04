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
     * @param string|null $state
     * @return string
     */
    public function createAuthUrl(?string $state = null): string;

    /**
     * @return array
     */
    public function createDeviceAuthorization(): array;

    /**
     * @param string $code
     * @param array $logContext
     * @return TokenBundleInterface
     */
    public function fetchTokenFromCode(string $code, array $logContext = []): TokenBundleInterface;

    /**
     * @param string $deviceCode
     * @param array $logContext
     * @return TokenBundleInterface
     */
    public function fetchTokenFromDeviceCode(string $deviceCode, array $logContext = []): TokenBundleInterface;

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

    public function fetchTokenFromClientCredentials(array $logContext = []): TokenBundleInterface;
}
