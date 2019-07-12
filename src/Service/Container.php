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
use Imper86\AllegroRestApiSdk\Model\SoapWsdl\ServiceService;
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
    /**
     * @var ServiceService
     */
    private $soapService;

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
                $this->getTokenBundleFactory(),
                $this->getSoapService()
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

    public function getSoapService(): ServiceService
    {
        if (null === $this->soapService) {
            $wsdlUrl = $this->appCredentials->isSandbox()
                ? 'https://webapi.allegro.pl.allegrosandbox.pl/service.php?wsdl'
                : 'https://webapi.allegro.pl/service.php?wsdl';

            $this->soapService = new ServiceService(
                [
                    'trace' => true,
                    'keep_alive' => false,
                    'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
                ],
                $wsdlUrl
            );
        }

        return $this->soapService;
    }
}
