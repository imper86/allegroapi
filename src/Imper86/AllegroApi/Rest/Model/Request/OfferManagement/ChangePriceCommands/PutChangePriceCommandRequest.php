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

}
