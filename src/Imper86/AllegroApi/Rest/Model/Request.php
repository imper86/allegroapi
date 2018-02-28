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

    public function __construct(string $uri, array $request = [], string $contentType = 'application/vnd.allegro.public.v1+json')
    {
        $this->uri = $this->prepareUri($uri);
        $this->request = $request;
        $this->contentType = $contentType;
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