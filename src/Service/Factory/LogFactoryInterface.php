<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 22.07.19
 * Time: 15:49
 */

namespace Imper86\AllegroRestApiSdk\Service\Factory;


use Imper86\AllegroRestApiSdk\Model\SoapWsdl\ServiceService;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use SoapFault;

interface LogFactoryInterface
{
    public function create(RequestInterface $request, ?ResponseInterface $response = null, array $userContext = []): void;

    public function createFromSoap(ServiceService $service, ?SoapFault $fault = null, array $userContext = []): void;
}
