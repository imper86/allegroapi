<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 08.07.19
 * Time: 11:47
 */

namespace Imper86\AllegroRestApiSdk\Service;


use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use Imper86\AllegroRestApiSdk\Model\Credentials\AppCredentialsInterface;
use Imper86\AllegroRestApiSdk\Service\Factory\RequestFactory;
use Imper86\AllegroRestApiSdk\Service\Factory\RequestFactoryInterface;
use Imper86\AllegroRestApiSdk\Service\Factory\TokenBundleFactory;
use Imper86\AllegroRestApiSdk\Service\Factory\TokenBundleFactoryInterface;
use Lcobucci\JWT\Parser;

class Container
{
    /**
     * @var array
     */
    private $instanceBag = [];
    /**
     * @var AppCredentialsInterface
     */
    private $appCredentials;

    public function __construct(AppCredentialsInterface $appCredentials)
    {
        $this->appCredentials = $appCredentials;
    }

    public function getAuthService(): AuthServiceInterface
    {
        $instanceRef = &$this->instanceBag[__FUNCTION__];

        if (null === $instanceRef) {
            $instanceRef = new AuthService(
                $this->appCredentials,
                $this->getHttpClient(),
                $this->getTokenBundleFactory()
            );
        }

        return $instanceRef;
    }

    public function getHttpClient(): ClientInterface
    {
        $instanceRef = &$this->instanceBag[__FUNCTION__];

        if (null === $instanceRef) {
            $instanceRef = new Client();
        }

        return $instanceRef;
    }

    public function getTokenBundleFactory(): TokenBundleFactoryInterface
    {
        $instanceRef = &$this->instanceBag[__FUNCTION__];

        if (null === $instanceRef) {
            $instanceRef = new TokenBundleFactory($this->getTokenParser());
        }

        return $instanceRef;
    }

    public function getTokenParser(): Parser
    {
        $instanceRef = &$this->instanceBag[__FUNCTION__];

        if (null === $instanceRef) {
            $instanceRef = new Parser();
        }

        return $instanceRef;
    }
}
