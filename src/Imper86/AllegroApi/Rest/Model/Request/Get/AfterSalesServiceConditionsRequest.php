<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 04.03.2018
 * Time: 16:56
 */

namespace Imper86\AllegroApi\Rest\Model\Request\Get;


use Imper86\AllegroApi\Rest\Model\RequestInterface;

class AfterSalesServiceConditionsRequest implements RequestInterface
{
    /**
     * @var string
     */
    private $resource;
    /**
     * @var string
     */
    private $sellerId;
    /**
     * @var int|null
     */
    private $limit;
    /**
     * @var int|null
     */
    private $offset;

    public function __construct(string $resource, string $sellerId, ?int $limit = null, ?int $offset = null)
    {
        $this->resource = $resource;
        $this->sellerId = $sellerId;
        $this->limit = $limit;
        $this->offset = $offset;
    }

    public function getRequestArray(): array
    {
        return [
            'sellerId' => $this->sellerId,
            'limit' => $this->limit,
            'offset' => $this->offset,
        ];
    }

    public function getRequestUri(): string
    {
        return "after-sales-service-conditions/{$this->resource}";
    }

    public function getContentType(): ?string
    {
        return null;
    }

    public function getRequestMethod(): string
    {
        return 'GET';
    }
}