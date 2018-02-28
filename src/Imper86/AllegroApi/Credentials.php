<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 28.02.2018
 * Time: 11:22
 */

namespace Imper86\AllegroApi;


class Credentials implements CredentialsInterface
{
    /**
     * @var string
     */
    private $restClientId;
    /**
     * @var string
     */
    private $restClientSecret;
    /**
     * @var string
     */
    private $restApiKey;
    /**
     * @var string
     */
    private $restRedirectUri;
    /**
     * @var string
     */
    private $soapApiKey;

    public function __construct(array $credentials)
    {
        foreach ($credentials as $field => $value) {
            if (isset($this->{$field})) {
                $this->{$field} = $value;
            }
        }
    }

    public function getAllegroApiRestClientId(): string
    {
        return $this->restClientId;
    }

    public function getAllegroApiRestClientSecret(): string
    {
        return $this->restClientSecret;
    }

    public function getAllegroApiRestApiKey(): string
    {
        return $this->restApiKey;
    }

    public function getAllegroApiRestRedirectUri(): string
    {
        return $this->restRedirectUri;
    }

    public function getAllegroSoapApiKey(): string
    {
        return $this->soapApiKey;
    }

}