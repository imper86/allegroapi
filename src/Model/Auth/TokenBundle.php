<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 06.07.19
 * Time: 14:06
 */

namespace Imper86\AllegroRestApiSdk\Model\Auth;

use DateTime;
use DateTimeInterface;
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
    /**
     * @var string[]|null
     */
    private $scope;

    public function __construct(
        Token $accessToken,
        ?Token $refreshToken = null,
        ?string $grantType = null,
        ?array $scope = null
    ) {
        $this->accessToken = $accessToken;
        $this->refreshToken = $refreshToken;
        $this->grantType = $grantType;
        $this->scope = $scope;
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
        return $this->getAccessToken()->claims()->has('user_name')
            ? $this->getAccessToken()->claims()->get('user_name')
            : null;
    }

    /**
     * @return DateTimeInterface
     * @throws Exception
     */
    public function getAccessExpirationTime(): DateTimeInterface
    {
        $exp = $this->getAccessToken()->claims()->get('exp');

        return $exp instanceof DateTimeInterface ? $exp : new DateTime('@' . $exp);
    }

    /**
     * @return DateTimeInterface
     * @throws Exception
     */
    public function getRefreshExpirationTime(): ?DateTimeInterface
    {
        $exp = $this->getRefreshToken()->claims()->get('exp');

        return $exp instanceof DateTimeInterface ? $exp : new DateTime('@' . $exp);
    }

    /**
     * @return string|null
     */
    public function getGrantType(): ?string
    {
        return $this->grantType;
    }

    public function getScope(): ?array
    {
        return $this->scope;
    }
}
