<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 28.03.2018
 * Time: 13:43
 */

namespace Imper86\AllegroApi\Rest\Model\Request\Post\Sale\Loyalty\Promotions\Multipack;


use Imper86\AllegroApi\Rest\Model\RequestInterface;

class PromotionsMultipackRequest implements RequestInterface
{
    /**
     * @var OfferCollection
     */
    private $offerCollection;
    /**
     * @var int
     */
    private $percentage;
    /**
     * @var int
     */
    private $forEachQuantity;

    public function __construct(OfferCollection $offerCollection, int $percentage = 100, int $forEachQuantity = 2)
    {
        $this->offerCollection = $offerCollection;
        $this->percentage = $percentage;
        $this->forEachQuantity = $forEachQuantity;
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
                        'type' => 'UNIT_PERCENTAGE_DISCOUNT',
                        'configuration' => [
                            'percentage' => (string) $this->percentage
                        ],
                        'trigger' => [
                            'forEachQuantity' => (string) $this->forEachQuantity,
                            'discountedNumber' => '1'
                        ],
                    ],
                ],
            ],
            'offerCriteria' => [
                [
                    'type' => 'CONTAINS_OFFERS',
                    'offers' => $this->offerCollection->toRequestArray(),
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