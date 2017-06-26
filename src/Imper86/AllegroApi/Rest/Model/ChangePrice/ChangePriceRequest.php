<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 13.06.17
 * Time: 12:26
 */

namespace Imper86\AllegroApi\Rest\Model\ChangePrice;


use Imper86\AllegroApi\Rest\Model\Http\RequestInterface;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

class ChangePriceRequest implements RequestInterface
{
    /**
     * @var int
     */
    private $auctionId;

    /**
     * @var float
     */
    private $newPrice;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var UuidInterface
     */
    private $uuid;


    public function __construct(int $auctionId, float $newPrice, string $currency = 'PLN', UuidInterface $uuid = null)
    {
        $this->auctionId = $auctionId;
        $this->newPrice = $newPrice;
        $this->currency = $currency;

        if (is_null($uuid)) $uuid = Uuid::uuid4();
        $this->uuid = $uuid;
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function getUri(): string
    {
        return "/offers/{$this->auctionId}/change-price-commands/{$this->uuid->toString()}";
    }

    public function getData(): array
    {
        return [
            'id' => $this->uuid->toString(),
            'input' => [
                'buyNowPrice' => [
                    'amount' => $this->newPrice,
                    'currency' => $this->currency,
                ],
            ],
        ];
    }

    public function getContentType(): ?string
    {
        return 'application/vnd.allegro.public.v1+json';
    }

    /**
     * @return int
     */
    public function getAuctionId(): int
    {
        return $this->auctionId;
    }

    /**
     * @return float
     */
    public function getNewPrice(): float
    {
        return $this->newPrice;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @return UuidInterface
     */
    public function getUuid(): UuidInterface
    {
        return $this->uuid;
    }
}