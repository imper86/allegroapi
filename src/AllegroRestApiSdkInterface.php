<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 06.07.19
 * Time: 13:40
 */

namespace Imper86\AllegroRestApiSdk;


use GuzzleHttp\Promise\PromiseInterface;
use Imper86\AllegroRestApiSdk\Service\AuthServiceInterface;
use Imper86\AllegroRestApiSdk\Service\Factory\TokenBundleFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

interface AllegroRestApiSdkInterface
{
    const API_HOST = 'api.allegro.pl';
    const API_SANDBOX_HOST = 'api.allegro.pl.allegrosandbox.pl';
    const UPLOAD_HOST = 'upload.allegro.pl';
    const UPLOAD_SANDBOX_HOST = 'upload.allegro.pl.allegrosandbox.pl';

    public function getAuthService(): AuthServiceInterface;

    public function getTokenBundleFactory(): TokenBundleFactoryInterface;

    public function sendRequest(RequestInterface $request, array $options = []): ResponseInterface;

    public function sendAsyncRequest(RequestInterface $request, array $options = []): PromiseInterface;
}
