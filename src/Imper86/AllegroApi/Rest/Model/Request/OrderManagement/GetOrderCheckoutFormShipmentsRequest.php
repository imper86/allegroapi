<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 03.07.19
 * Time: 14:29
 */

namespace Imper86\AllegroApi\Rest\Model\Request\OrderManagement;


use Imper86\AllegroApi\Rest\Model\RequestInterface;
use Imper86\AllegroApi\RestClientInterface;

class GetOrderCheckoutFormShipmentsRequest implements RequestInterface
{
    /**
     * @var string
     */
    private $orderId;

    public function __construct(string $orderId)
    {
        $this->orderId = $orderId;
    }

    public function getMethod(): string
    {
        return 'GET';
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
        return null;
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
}
