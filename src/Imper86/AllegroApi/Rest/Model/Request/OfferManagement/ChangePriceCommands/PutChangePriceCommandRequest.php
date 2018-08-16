<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.08.18
 * Time: 17:29
 */

namespace Imper86\AllegroApi\Rest\Model\Request\OfferManagement\ChangePriceCommands;


use Imper86\AllegroApi\Rest\Model\RequestInterface;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class PutChangePriceCommandRequest implements RequestInterface
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
    /**
     * @var string
     */
    private $currency;

    public function __construct(string $offerId, float $buyNowPrice, string $currency = 'PLN', ?UuidInterface $uuid = null)
    {
        if (null === $uuid) {
            $uuid = Uuid::uuid4();
        }

        $this->offerId = $offerId;
        $this->buyNowPrice = $buyNowPrice;
        $this->uuid = $uuid;
        $this->currency = $currency;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return "/offers/{$this->offerId}/change-price-commands/{$this->uuid->toString()}";
    }

    public function getContentType(): ?string
    {
        return null;
    }

    public function getBody(): ?array
    {
        return [
            'id' => $this->uuid->toString(),
            'input' => [
                'buyNowPrice' => [
                    'amount' => (string) $this->buyNowPrice,
                    'currency' => $this->currency,
                ]
            ]
        ];
    }

    public function getQuery(): ?array
    {
        return null;
    }

    /**
     * @return string
     */
    public function getOfferId(): string
    {
        return $this->offerId;
    }

    /**
     * @param string $offerId
     */
    public function setOfferId(string $offerId): void
    {
        $this->offerId = $offerId;
    }

    /**
     * @return float
     */
    public function getBuyNowPrice(): float
    {
        return $this->buyNowPrice;
    }

    /**
     * @param float $buyNowPrice
     */
    public function setBuyNowPrice(float $buyNowPrice): void
    {
        $this->buyNowPrice = $buyNowPrice;
    }

    /**
     * @return UuidInterface
     */
    public function getUuid(): UuidInterface
    {
        return $this->uuid;
    }

    /**
     * @param UuidInterface $uuid
     */
    public function setUuid(UuidInterface $uuid): void
    {
        $this->uuid = $uuid;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }


}
