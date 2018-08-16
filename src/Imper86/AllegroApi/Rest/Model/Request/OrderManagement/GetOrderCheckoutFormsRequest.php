<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 14.08.18
 * Time: 16:29
 */

namespace Imper86\AllegroApi\Rest\Model\Request\OrderManagement;


use Imper86\AllegroApi\Rest\Model\Request\RequestToolsTrait;
use Imper86\AllegroApi\Rest\Model\RequestInterface;
use Imper86\AllegroApi\RestClientInterface;

class GetOrderCheckoutFormsRequest implements RequestInterface
{
    use RequestToolsTrait;

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
    private $status;
    /**
     * @var \DateTime|null
     */
    private $boughtAtFrom;
    /**
     * @var \DateTime|null
     */
    private $boughtAtTo;

    public function __construct(
        ?int $offset = null,
        ?int $limit = null,
        ?string $status = null,
        ?\DateTime $boughtAtFrom = null,
        ?\DateTime $boughtAtTo = null
    ) {
        $this->offset = $offset;
        $this->limit = $limit;
        $this->status = $status;
        $this->boughtAtFrom = $boughtAtFrom;
        $this->boughtAtTo = $boughtAtTo;

        $this->changeDateTimeZone($this->boughtAtFrom);
        $this->changeDateTimeZone($this->boughtAtTo);
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return "order/checkout-forms";
    }

    public function getContentType(): ?string
    {
        return RestClientInterface::CONTENT_TYPE_BETA;
    }

    public function getBody(): ?array
    {
        return null;
    }

    public function getQuery(): ?array
    {
        return [
            'offset' => $this->offset,
            'limit' => $this->limit,
            'status' => $this->status,
            'lineItems.boughtAt.lte' => $this->boughtAtTo === null
                ? null
                : $this->boughtAtTo->format(RestClientInterface::DATE_TIME_FORMAT),
            'lineItems.boughtAt.gte' => $this->boughtAtFrom === null
                ? null
                : $this->boughtAtFrom->format(RestClientInterface::DATE_TIME_FORMAT),
        ];
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
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param null|string $status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return \DateTime|null
     */
    public function getBoughtAtFrom(): ?\DateTime
    {
        return $this->boughtAtFrom;
    }

    /**
     * @param \DateTime|null $boughtAtFrom
     */
    public function setBoughtAtFrom(?\DateTime $boughtAtFrom): void
    {
        $this->boughtAtFrom = $boughtAtFrom;
    }

    /**
     * @return \DateTime|null
     */
    public function getBoughtAtTo(): ?\DateTime
    {
        return $this->boughtAtTo;
    }

    /**
     * @param \DateTime|null $boughtAtTo
     */
    public function setBoughtAtTo(?\DateTime $boughtAtTo): void
    {
        $this->boughtAtTo = $boughtAtTo;
    }


}
