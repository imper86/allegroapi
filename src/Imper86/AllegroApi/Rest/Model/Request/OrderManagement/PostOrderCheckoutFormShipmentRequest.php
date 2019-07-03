<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 03.07.19
 * Time: 14:33
 */

namespace Imper86\AllegroApi\Rest\Model\Request\OrderManagement;


use Imper86\AllegroApi\Rest\Model\RequestInterface;
use Imper86\AllegroApi\RestClientInterface;

class PostOrderCheckoutFormShipmentRequest implements RequestInterface
{
    /**
     * @var string
     */
    private $orderId;
    /**
     * @var string
     */
    private $carrierId;
    /**
     * @var string
     */
    private $waybill;
    /**
     * @var array
     */
    private $lineItemIds;
    /**
     * @var string|null
     */
    private $carrierName;

    public function __construct(
        string $orderId,
        string $carrierId,
        string $waybill,
        array $lineItemIds,
        ?string $carrierName = null
    )
    {
        $this->orderId = $orderId;
        $this->carrierId = $carrierId;
        $this->waybill = $waybill;
        $this->lineItemIds = $lineItemIds;
        $this->carrierName = $carrierName;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return "order/checkout-forms/{$this->orderId}/shipments";
    }

    public function getContentType(): ?string
    {
        return RestClientInterface::CONTENT_TYPE_BETA;
    }

    public function getBody(): ?array
    {
        $lineItems = array_map(function ($lineItemId) {
            return ['id' => $lineItemId];
        }, $this->lineItemIds);

        return [
            'carrierId' => $this->carrierId,
            'waybill' => $this->waybill,
            'lineItems' => $lineItems,
            'carrierName' => $this->carrierName,
        ];
    }

    public function getQuery(): ?array
    {
        return null;
    }

    /**
     * @return string
     */
    public function getOrderId(): string
    {
        return $this->orderId;
    }

    /**
     * @param string $orderId
     */
    public function setOrderId(string $orderId): void
    {
        $this->orderId = $orderId;
    }

    /**
     * @return string
     */
    public function getCarrierId(): string
    {
        return $this->carrierId;
    }

    /**
     * @param string $carrierId
     */
    public function setCarrierId(string $carrierId): void
    {
        $this->carrierId = $carrierId;
    }

    /**
     * @return string
     */
    public function getWaybill(): string
    {
        return $this->waybill;
    }

    /**
     * @param string $waybill
     */
    public function setWaybill(string $waybill): void
    {
        $this->waybill = $waybill;
    }

    /**
     * @return array
     */
    public function getLineItemIds(): array
    {
        return $this->lineItemIds;
    }

    /**
     * @param array $lineItemIds
     */
    public function setLineItemIds(array $lineItemIds): void
    {
        $this->lineItemIds = $lineItemIds;
    }

    /**
     * @return string|null
     */
    public function getCarrierName(): ?string
    {
        return $this->carrierName;
    }

    /**
     * @param string|null $carrierName
     */
    public function setCarrierName(?string $carrierName): void
    {
        $this->carrierName = $carrierName;
    }
}
