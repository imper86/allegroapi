<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 14.08.18
 * Time: 15:58
 */

namespace Imper86\AllegroApi\Rest\Model\Request\OffersListing;


use Imper86\AllegroApi\Rest\Model\RequestInterface;

class GetOffersListingRequest implements RequestInterface
{
    /**
     * @var null|string
     */
    private $categoryId;
    /**
     * @var null|string
     */
    private $phrase;
    /**
     * @var null|string
     */
    private $sellerId;
    /**
     * @var null|string
     */
    private $searchMode;
    /**
     * @var int|null
     */
    private $offset;
    /**
     * @var int|null
     */
    private $limit;
    /**
     * @var null|string
     */
    private $sort;
    /**
     * @var null|string
     */
    private $include;
    /**
     * @var bool|null
     */
    private $fallback;

    public function __construct(
        ?string $categoryId = null,
        ?string $phrase = null,
        ?string $sellerId = null,
        ?string $searchMode = null,
        ?int $offset = null,
        ?int $limit = null,
        ?string $sort = null,
        ?string $include = null,
        ?bool $fallback = null
    ) {

        $this->categoryId = $categoryId;
        $this->phrase = $phrase;
        $this->sellerId = $sellerId;
        $this->searchMode = $searchMode;
        $this->offset = $offset;
        $this->limit = $limit;
        $this->sort = $sort;
        $this->include = $include;
        $this->fallback = $fallback;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return "offers/listing";
    }

    public function getContentType(): ?string
    {
        return null;
    }

    public function getBody(): ?array
    {
        return null;
    }

    public function getQuery(): ?array
    {
        return [
            'category.id' => $this->categoryId,
            'phrase' => $this->phrase,
            'seller.id' => $this->sellerId,
            'searchMode' => $this->searchMode,
            'offset' => $this->offset,
            'limit' => $this->limit,
            'sort' => $this->sort,
            'include' => $this->include,
            'fallback' => $this->fallback,
        ];
    }


}
