<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 06.07.19
 * Time: 14:06
 */

namespace Imper86\AllegroRestApiSdk\Model\Auth;


use DateTime;
use Exception;
use Lcobucci\JWT\Token;

/**
 * Class TokenBundle
 * @package Imper86\AllegroRestApiSdk\Model\Auth
 */
class TokenBundle implements TokenBundleInterface
{
    /**
     * @var Token
     */
    private $accessToken;
    /**
     * @var Token|null
     */
    private $refreshToken;
    /**
     * @var string|null
     */
    private $grantType;

    public function __construct(Token $accessToken, ?Token $refreshToken = null, ?string $grantType = null)
    {
        $this->accessToken = $accessToken;
        $this->refreshToken = $refreshToken;
        $this->grantType = $grantType;
    }

    /**
     * @return Token
     */
    public function getAccessToken(): Token
    {
        return $this->accessToken;
    }

    /**
     * @return Token|null
     */
    public function getRefreshToken(): ?Token
    {
        return $this->refreshToken;
    }

    /**
     * @return string|null
     */
    public function getUserId(): ?string
    {
        return $this->getAccessToken()->hasClaim('user_name')
            ? $this->getAccessToken()->getClaim('user_name')
            : null;
    }

    /**
     * @return DateTime
     * @throws Exception
     */
    public function getAccessExpirationTime(): DateTime
    {
        return new DateTime('@' . $this->getAccessToken()->getClaim('exp'));
    }

    /**
     * @return DateTime
     * @throws Exception
     */
    public function getRefreshExpirationTime(): ?DateTime
    {
        return new DateTime('@' . $this->getRefreshToken()->getClaim('exp'));
    }

    /**
     * @return string|null
     */
    public function getGrantType(): ?string
    {
        return $this->grantType;
    }
}
