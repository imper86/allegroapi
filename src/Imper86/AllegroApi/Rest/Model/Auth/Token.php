<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.06.17
 * Time: 17:00
 */

namespace Imper86\AllegroApi\Rest\Model\Auth;


use Imper86\AllegroApi\Rest\Exception\IncorrectCurlResponseException;
use Imper86\Curl\Model\ResponseInterface as CurlResponseInterface;
use Imper86\Core\DateTime;

class Token implements TokenInterface
{
    /**
     * @var string
     */
    private $accessToken;

    /**
     * @var string
     */
    private $refreshToken;

    /**
     * @var \DateTime
     */
    private $expirationTime;

    public function __construct(CurlResponseInterface $curlResponse)
    {
        $data = $curlResponse->getRawResponse();

        if (
            empty($data->access_token)
            || empty($data->refresh_token)
            || empty($data->expires_in)
        ) {
            throw new IncorrectCurlResponseException($curlResponse);
        }

        $this->accessToken = $data->access_token;
        $this->refreshToken = $data->refresh_token;

        $expirationTime = new DateTime();
        $expirationTime->add(new \DateInterval("PT{$data->expires_in}S"));

        $this->expirationTime = $expirationTime;
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
}