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

    /**
     * @return null|string
     */
    public function getCategoryId(): ?string
    {
        return $this->categoryId;
    }

    /**
     * @param null|string $categoryId
     */
    public function setCategoryId(?string $categoryId): void
    {
        $this->categoryId = $categoryId;
    }

    /**
     * @return null|string
     */
    public function getPhrase(): ?string
    {
        return $this->phrase;
    }

    /**
     * @param null|string $phrase
     */
    public function setPhrase(?string $phrase): void
    {
        $this->phrase = $phrase;
    }

    /**
     * @return null|string
     */
    public function getSellerId(): ?string
    {
        return $this->sellerId;
    }

    /**
     * @param null|string $sellerId
     */
    public function setSellerId(?string $sellerId): void
    {
        $this->sellerId = $sellerId;
    }

    /**
     * @return null|string
     */
    public function getSearchMode(): ?string
    {
        return $this->searchMode;
    }

    /**
     * @param null|string $searchMode
     */
    public function setSearchMode(?string $searchMode): void
    {
        $this->searchMode = $searchMode;
    }

    /**
     * @return int|null
     */
    public function getOffset(): ?int
    {
        return $this->offset;
    }

    /**
     * @param int|null $offset
     */
    public function setOffset(?int $offset): void
    {
        $this->offset = $offset;
    }

    /**
     * @return int|null
     */
    public function getLimit(): ?int
    {
        return $this->limit;
    }

    /**
     * @param int|null $limit
     */
    public function setLimit(?int $limit): void
    {
        $this->limit = $limit;
    }

    /**
     * @return null|string
     */
    public function getSort(): ?string
    {
        return $this->sort;
    }

    /**
     * @param null|string $sort
     */
    public function setSort(?string $sort): void
    {
        $this->sort = $sort;
    }

    /**
     * @return null|string
     */
    public function getInclude(): ?string
    {
        return $this->include;
    }

    /**
     * @param null|string $include
     */
    public function setInclude(?string $include): void
    {
        $this->include = $include;
    }

    /**
     * @return bool|null
     */
    public function getFallback(): ?bool
    {
        return $this->fallback;
    }

    /**
     * @param bool|null $fallback
     */
    public function setFallback(?bool $fallback): void
    {
        $this->fallback = $fallback;
    }


}
