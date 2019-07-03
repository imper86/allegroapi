<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 03.07.19
 * Time: 14:42
 */

namespace Imper86\AllegroApi\Rest\Model\Request\Payments;


use Imper86\AllegroApi\Rest\Model\RequestInterface;
use Imper86\AllegroApi\RestClientInterface;

class GetPaymentIdMappingsRequest implements RequestInterface
{
    /**
     * @var string|null
     */
    private $paymentId;
    /**
     * @var string|null
     */
    private $transactionId;

    public function __construct(?string $paymentId = null, ?string $transactionId = null)
    {
        $this->paymentId = $paymentId;
        $this->transactionId = $transactionId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return 'payments/payment-id-mappings';
    }

    public function getContentType(): ?string
    {
        return RestClientInterface::CONTENT_TYPE_PUBLIC;
    }

    public function getBody(): ?array
    {
        return null;
    }

    public function getQuery(): ?array
    {
        return [
            'paymentId' => $this->paymentId,
            'transactionId' => $this->transactionId,
        ];
    }

    /**
     * @return string|null
     */
    public function getPaymentId(): ?string
    {
        return $this->paymentId;
    }

    /**
     * @param string|null $paymentId
     */
    public function setPaymentId(?string $paymentId): void
    {
        $this->paymentId = $paymentId;
    }

    /**
     * @return string|null
     */
    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }

    /**
     * @param string|null $transactionId
     */
    public function setTransactionId(?string $transactionId): void
    {
        $this->transactionId = $transactionId;
    }
}
