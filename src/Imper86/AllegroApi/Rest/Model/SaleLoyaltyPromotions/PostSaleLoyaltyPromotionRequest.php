<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.12.17
 * Time: 16:06
 */

namespace Imper86\AllegroApi\Rest\Model\SaleLoyaltyPromotions;


use Imper86\AllegroApi\Rest\Model\Http\RequestInterface;
use Imper86\AllegroApi\Rest\Model\SaleLoyaltyPromotions\Exception\NegativeDiscountException;
use Imper86\AllegroApi\Rest\Model\SaleLoyaltyPromotions\Exception\TooFewOffersException;
use Imper86\AllegroApi\Rest\Model\SaleLoyaltyPromotions\Post\OfferCollection;

class PostSaleLoyaltyPromotionRequest implements RequestInterface
{
    /**
     * @var float
     */
    private $discountAmount;
    /**
     * @var OfferCollection
     */
    private $offerCollection;

    public function __construct(float $discountAmount, OfferCollection $offerCollection)
    {
        $this->discountAmount = $discountAmount;
        $this->offerCollection = $offerCollection;

        $this->validate();
    }

    private function validate()
    {
        if (count($this->offerCollection) < 2) {
            throw new TooFewOffersException();
        }

        if ($this->discountAmount < 0) {
            throw new NegativeDiscountException();
        }
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/sale/loyalty/promotions';
    }

    public function getData(): array
    {
        return [
            'benefits' => [
                [
                    'specification' => [
                        'type' => 'ORDER_FIXED_DISCOUNT',
                        'value' => [
                            'amount' => $this->discountAmount,
                            'currency' => 'PLN',
                        ],
                    ],
                ],
            ],
            'offerCriteria' => [
                [
                    'type' => 'CONTAINS_OFFERS',
                    'offers' => $this->offerCollection->getData(),
                ],
            ],
        ];
    }

    public function getContentType(): ?string
    {
        return 'application/vnd.allegro.public.v1+json';
    }

}