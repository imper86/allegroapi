<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 14:20
 */

namespace Imper86\AllegroApi;


use Imper86\AllegroApi\Rest\Model\Auth\TokenInterface;
use Imper86\AllegroApi\Rest\Service\Auth\AuthServiceInterface;
use Psr\Http\Message\ResponseInterface;

interface AllegroApiRestClientInterface
{
    public function getAuthService(): AuthServiceInterface;

    public function get(TokenInterface $token, string $uri, array $parameters = []): ResponseInterface;

    public function post(TokenInterface $token, string $uri, array $parameters = []): ResponseInterface;

    public function put(TokenInterface $token, string $uri, array $parameters = []): ResponseInterface;

    public function delete(TokenInterface $token, string $uri, array $parameters = []): ResponseInterface;
}