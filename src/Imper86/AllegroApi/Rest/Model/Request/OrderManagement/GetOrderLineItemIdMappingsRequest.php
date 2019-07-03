<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 03.07.19
 * Time: 14:37
 */

namespace Imper86\AllegroApi\Rest\Model\Request\OrderManagement;


use Imper86\AllegroApi\Rest\Model\RequestInterface;
use Imper86\AllegroApi\RestClientInterface;

class GetOrderLineItemIdMappingsRequest implements RequestInterface
{
    /**
     * @var string|null
     */
    private $lineItemId;
    /**
     * @var string|null
     */
    private $dealId;

    public function __construct(?string $lineItemId = null, ?string $dealId = null)
    {
        $this->lineItemId = $lineItemId;
        $this->dealId = $dealId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return "order/line-item-id-mappings";
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
            'lineItemId' => $this->lineItemId,
            'dealId' => $this->dealId,
        ];
    }

    /**
     * @return string|null
     */
    public function getLineItemId(): ?string
    {
        return $this->lineItemId;
    }

    /**
     * @param string|null $lineItemId
     */
    public function setLineItemId(?string $lineItemId): void
    {
        $this->lineItemId = $lineItemId;
    }

    /**
     * @return string|null
     */
    public function getDealId(): ?string
    {
        return $this->dealId;
    }

    /**
     * @param string|null $dealId
     */
    public function setDealId(?string $dealId): void
    {
        $this->dealId = $dealId;
    }
}
