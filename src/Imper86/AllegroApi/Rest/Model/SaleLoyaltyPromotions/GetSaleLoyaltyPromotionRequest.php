<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.12.17
 * Time: 15:17
 */

namespace Imper86\AllegroApi\Rest\Model\SaleLoyaltyPromotions;


use Imper86\AllegroApi\Rest\Model\Http\RequestInterface;

class GetSaleLoyaltyPromotionRequest implements RequestInterface
{
    /**
     * @var string
     */
    private $promotionId;

    public function __construct(string $promotionId)
    {
        $this->promotionId = $promotionId;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/sale/loyalty/promotions/'.$this->promotionId;
    }

    public function getData(): array
    {
        return [
            'promotionId' => $this->promotionId,
            'details' => null,
            'authenticated' => true,
        ];
    }

    public function getContentType(): ?string
    {
        return 'application/vnd.allegro.public.v1+json';
    }

}