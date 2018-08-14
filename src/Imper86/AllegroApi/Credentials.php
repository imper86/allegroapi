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
            if (property_exists($this, $field)) {
                $this->{$field} = $value;
            }
        }
    }

    public function getRestClientId(): string
    {
        return $this->restClientId;
    }

    public function getRestClientSecret(): string
    {
        return $this->restClientSecret;
    }

    public function getRestApiKey(): string
    {
        return $this->restApiKey;
    }

    public function getRestRedirectUri(): string
    {
        return $this->restRedirectUri;
    }

    public function getSoapApiKey(): string
    {
        return $this->soapApiKey;
    }

}
