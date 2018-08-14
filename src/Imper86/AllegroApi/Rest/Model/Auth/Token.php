<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.06.17
 * Time: 17:00
 */

namespace Imper86\AllegroApi\Rest\Model\Auth;

use Lcobucci\JWT\Parser;
use Psr\Http\Message\ResponseInterface;

class Token implements TokenInterface
{
    /**
     * @var string
     */
    private $accessToken;
    /**
     * @var \Lcobucci\JWT\Token
     */
    private $accessTokenDecoded;
    /**
     * @var string
     */
    private $refreshToken;
    /**
     * @var \DateTime
     */
    private $expirationTime;
    /**
     * @var string
     */
    private $userId;

    public function __construct(ResponseInterface $apiResponse)
    {
        $data = json_decode($apiResponse->getBody()->getContents());

        if (
            empty($data->access_token)
            || empty($data->refresh_token)
            || empty($data->expires_in)
        ) {
            throw new \Exception('Nieprawidłowa struktura odpowiedzi API, otrzymano: '.$apiResponse->getBody()->getContents());
        }

        $this->accessToken = $data->access_token;
        $this->refreshToken = $data->refresh_token;

        $expirationTime = new \DateTime();
        $expirationTime->add(new \DateInterval("PT{$data->expires_in}S"));

        $this->expirationTime = $expirationTime;

        $jwtParser = new Parser();
        $tokenDecoded = $jwtParser->parse($this->accessToken);
        $this->accessTokenDecoded = $tokenDecoded;
        $this->userId = $tokenDecoded->getClaim('user_name');
    }


    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    public function getRefreshToken(): string
    {
        return $this->refreshToken;
    }

    public function getExpirationTime(): \DateTime
    {
        return $this->expirationTime;
    }

    public function getUserId(): string
    {
        return $this->userId;
    }


}
