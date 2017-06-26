<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 17:19
 */

namespace Imper86\AllegroApi;


use Imper86\AllegroApi\Rest\Model\Auth\TokenInterface;
use Imper86\AllegroApi\Soap\Service\SoapService;
use Imper86\AllegroApi\Soap\Wsdl\DoLoginWithAccessTokenRequest;
use Imper86\AllegroApi\Soap\Wsdl\ServiceService;

class AllegroApiSoapClient implements AllegroApiSoapClientInterface
{
    /**
     * @var string
     */
    private $sessionHandle;

    /**
     * @var SoapService
     */
    private $soapService;

    /**
     * @var CredentialsInterface
     */
    private $credentials;


    public function __construct(CredentialsInterface $credentials, string $sessionHandle = null)
    {
        $this->credentials = $credentials;
        $this->sessionHandle = $sessionHandle;
    }

    public function getSessionHandle(): string
    {
        return $this->sessionHandle;
    }

    public function setSessionHandle(string $sessionHandle)
    {
        $this->sessionHandle = $sessionHandle;
    }

    public function refreshSessionHandleWithRestToken(TokenInterface $token)
    {
        $client = $this->getService();

        $request = new DoLoginWithAccessTokenRequest(
            $token->getAccessToken(),
            1,
            $this->credentials->getAllegroSoapApiKey()
        );

        $response = $client->doLoginWithAccessToken($request);

        $this->sessionHandle = $response->getSessionHandlePart();
    }

    public function getService(): SoapService
    {
        if (is_null($this->soapService)) {
            $this->soapService = new SoapService(['trace' => true]);
        }

        return $this->soapService;
    }

}