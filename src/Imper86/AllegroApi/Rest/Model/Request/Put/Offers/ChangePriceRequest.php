<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 04.03.2018
 * Time: 16:59
 */

namespace Imper86\AllegroApi\Rest\Model\Request\Put\Offers;


use Imper86\AllegroApi\Rest\Model\RequestInterface;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class ChangePriceRequest implements RequestInterface
{
    /**
     * @var string
     */
    private $offerId;
    /**
     * @var float
     */
    private $buyNowPrice;
    /**
     * @var UuidInterface
     */
    private $uuid;

    public function __construct(string $offerId, float $buyNowPrice, UuidInterface $uuid = null)
    {
        if (null === $uuid) {
            $uuid = Uuid::uuid4();
        }

        $this->offerId = $offerId;
        $this->buyNowPrice = $buyNowPrice;
        $this->uuid = $uuid;
    }

    public function getRequestArray(): array
    {
        return [
            'id' => $this->uuid->toString(),
            'input' => [
                'buyNowPrice' => [
                    'amount' => (string) $this->buyNowPrice,
                    'currency' => 'PLN',
                ],
            ],
        ];
    }

    public function getRequestUri(): string
    {
        return "offers/{$this->offerId}/change-price-commands/{$this->uuid->toString()}";
    }

    public function getContentType(): ?string
    {
        return null;
    }

    public function getRequestMethod(): string
    {
        return 'PUT';
    }

    /**
     * @return string
     */
    public function getOfferId(): string
    {
        return $this->offerId;
    }

    /**
     * @return float
     */
    public function getBuyNowPrice(): float
    {
        return $this->buyNowPrice;
    }

    /**
     * @return UuidInterface
     */
    public function getUuid(): UuidInterface
    {
        return $this->uuid;
    }

}