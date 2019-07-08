<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 06.07.19
 * Time: 13:40
 */

namespace Imper86\AllegroRestApiSdk;


use Imper86\AllegroRestApiSdk\Service\AuthServiceInterface;
use Imper86\AllegroRestApiSdk\Service\Factory\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

interface AllegroRestApiSdkInterface
{
    const API_HOST = 'api.allegro.pl';
    const API_SANDBOX_HOST = 'api.allegro.pl.allegrosandbox.pl';
    const UPLOAD_HOST = 'upload.allegro.pl';
    const UPLOAD_SANDBOX_HOST = 'upload.allegro.pl.allegrosandbox.pl';

    public function getAuthService(): AuthServiceInterface;

    public function getRequestFactory(): RequestFactoryInterface;

    public function sendRequest(RequestInterface $request, array $options = []): ResponseInterface;
}
