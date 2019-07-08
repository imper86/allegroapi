<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 06.07.19
 * Time: 13:32
 */

namespace Imper86\AllegroRestApiSdk\Model\Credentials;


class AppCredentials implements AppCredentialsInterface
{
    /**
     * @var string
     */
    private $clientId;
    /**
     * @var string
     */
    private $clientSecret;
    /**
     * @var string
     */
    private $redirectUri;
    /**
     * @var bool
     */
    private $isSandbox;

    public function __construct(
        string $clientId,
        string $clientSecret,
        string $redirectUri,
        bool $isSandbox = false
    )
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->redirectUri = $redirectUri;
        $this->isSandbox = $isSandbox;
    }

    /**
     * @return string
     */
    public function getClientId(): string
    {
        return $this->clientId;
    }

    /**
     * @param string $clientId
     */
    public function setClientId(string $clientId): void
    {
        $this->clientId = $clientId;
    }

    /**
     * @return string
     */
    public function getClientSecret(): string
    {
        return $this->clientSecret;
    }

    /**
     * @param string $clientSecret
     */
    public function setClientSecret(string $clientSecret): void
    {
        $this->clientSecret = $clientSecret;
    }

    /**
     * @return string
     */
    public function getRedirectUri(): string
    {
        return $this->redirectUri;
    }

    /**
     * @param string $redirectUri
     */
    public function setRedirectUri(string $redirectUri): void
    {
        $this->redirectUri = $redirectUri;
    }

    /**
     * @return bool
     */
    public function isSandbox(): bool
    {
        return $this->isSandbox;
    }

    /**
     * @param bool $isSandbox
     */
    public function setIsSandbox(bool $isSandbox): void
    {
        $this->isSandbox = $isSandbox;
    }
}
