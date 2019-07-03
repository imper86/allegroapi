<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 14:20
 */

namespace Imper86\AllegroApi;


use Imper86\AllegroApi\Rest\Model\Auth\TokenInterface;
use Imper86\AllegroApi\Rest\Model\RequestInterface;
use Imper86\AllegroApi\Rest\Service\Auth\AuthServiceInterface;
use Psr\Http\Message\ResponseInterface;

interface RestClientInterface
{
    const CONTENT_TYPE_PUBLIC = 'application/vnd.allegro.public.v1+json';

    const CONTENT_TYPE_BETA = 'application/vnd.allegro.beta.v1+json';

    const CONTENT_TYPE_BETA_V2 = 'application/vnd.allegro.beta.v2+json';

    const DATE_TIME_FORMAT = 'Y-m-d\TH:i:s.v\Z';

    const DATE_TIME_ZONE = 'UTC';

    const REST_API_URL = 'https://api.allegro.pl';

    const UPLOAD_URL = 'https://upload.allegro.pl';

    const OAUTH_URL = 'https://allegro.pl/auth/oauth';

    public function getAuthService(): AuthServiceInterface;

    public function sendRequest(
        TokenInterface $token,
        RequestInterface $request,
        array $guzzleOptions = []
    ): ResponseInterface;

    public function uploadImage(TokenInterface $token, string $imageBody): ResponseInterface;

    public function getLastHttpRequest(): ?\Psr\Http\Message\RequestInterface;

    public function getLastHttpResponse(): ?ResponseInterface;
}
