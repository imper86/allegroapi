<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 28.02.2018
 * Time: 10:03
 */

namespace Imper86\AllegroApi\Rest\Model;


use Imper86\AllegroApi\Rest\Exception\InvalidRequestMethodException;

class Request implements RequestInterface
{
    /**
     * @var string
     */
    private $uri;
    /**
     * @var array|null
     */
    private $body;
    /**
     * @var array|null
     */
    private $query;
    /**
     * @var string
     */
    private $contentType;
    /**
     * @var string
     */
    private $method;

    public function __construct(
        string $uri,
        string $method = 'GET',
        ?array $body = null,
        ?array $query = null,
        ?string $contentType = null
    ) {
        if (!in_array($method, RequestInterface::ALLOWED_METHODS)) {
            throw new InvalidRequestMethodException();
        }

        $this->uri = $this->prepareUri($uri);
        $this->body = $body;
        $this->query = $query;
        $this->contentType = $contentType;
        $this->method = strtoupper($method);
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    public function getContentType(): ?string
    {
        return $this->contentType;
    }

    public function getBody(): ?array
    {
        return $this->body;
    }

    public function getQuery(): ?array
    {
        return $this->query;
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
