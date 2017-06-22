<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 17:03
 */

namespace Imper69\AllegroApi;


use Imper69\AllegroApi\Rest\Model\Auth\TokenInterface;
use Imper69\AllegroApi\Soap\Service\SoapService;

interface AllegroApiSoapClientInterface
{
    public function getSessionHandle(): string;

    public function setSessionHandle(string $sessionHandle);

    public function refreshSessionHandleWithRestToken(TokenInterface $token);

    public function getService(): SoapService;
}