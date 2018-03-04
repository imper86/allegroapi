<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 28.02.2018
 * Time: 10:03
 */

namespace Imper86\AllegroApi\Rest\Model;


class Request implements RequestInterface
{
    /**
     * @var string
     */
    private $uri;
    /**
     * @var array
     */
    private $request;
    /**
     * @var string
     */
    private $contentType;
    /**
     * @var string
     */
    private $method;

    public function __construct(string $method = 'GET', string $uri, array $request = [], string $contentType = 'application/vnd.allegro.public.v1+json')
    {
        $this->uri = $this->prepareUri($uri);
        $this->request = $request;
        $this->contentType = $contentType;
        $this->method = strtoupper($method);
    }

    public function getRequestArray(): array
    {
        return $this->request;
    }

    public function getRequestUri(): string
    {
        return $this->uri;
    }

    public function getContentType(): ?string
    {
        return $this->contentType;
    }

    public function getRequestMethod(): string
    {
        return $this->method;
    }

    private function prepareUri(string $uri): string
    {
        if ('/' === substr($uri, 0, 1)) {
            return substr($uri, 1);
        }

        if ('http' === substr($uri, 0, 4)) {
            throw new \Exception('Please provide just URI, eg. sale/offer-additional-services/groups');
        }

        return $uri;
    }
}