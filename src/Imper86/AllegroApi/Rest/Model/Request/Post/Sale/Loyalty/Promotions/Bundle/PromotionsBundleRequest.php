<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 28.03.2018
 * Time: 11:53
 */

namespace Imper86\AllegroApi\Rest\Model\Request\Post\Sale\Loyalty\Promotions\Bundle;


use Imper86\AllegroApi\Rest\Model\RequestInterface;

class PromotionsBundleRequest implements RequestInterface
{
    /**
     * @var float
     */
    private $benefitValue;
    /**
     * @var OfferCollection
     */
    private $offersCollection;

    public function __construct(float $benefitValue, OfferCollection $offersCollection)
    {
        $this->benefitValue = $benefitValue;
        $this->offersCollection = $offersCollection;
    }

    public function getRequestMethod(): string
    {
        return 'POST';
    }

    public function getRequestArray(): array
    {
        return [
            'benefits' => [
                [
                    'specification' => [
                        'type' => 'ORDER_FIXED_DISCOUNT',
                        'value' => [
                            'amount' => (string) $this->benefitValue,
                            'currency' => 'PLN',
                        ],
                    ],
                ],
            ],
            'offerCriteria' => [
                [
                    'type' => 'CONTAINS_OFFERS',
                    'offers' => $this->offersCollection->toRequestArray(),
                ],
            ],
        ];
    }

    public function getRequestUri(): string
    {
        return 'sale/loyalty/promotions';
    }

    public function getContentType(): ?string
    {
        return null;
    }

}