<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 17:03
 */

namespace Imper86\AllegroApi;


use Imper86\AllegroApi\Rest\Model\Auth\TokenInterface;
use Imper86\AllegroApi\Soap\Service\SoapService;

interface AllegroApiSoapClientInterface
{
    public function getSessionHandle(): string;

    public function setSessionHandle(string $sessionHandle);

    public function refreshSessionHandleWithRestToken(TokenInterface $token);

    public function getService(): SoapService;
}