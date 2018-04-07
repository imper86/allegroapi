<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 28.03.2018
 * Time: 15:02
 */

namespace Imper86\AllegroApi\Rest\Model\Request\Delete\Sale\Loyalty;


use Imper86\AllegroApi\Rest\Model\RequestInterface;

class PromotionsRequest implements RequestInterface
{
    /**
     * @var string
     */
    private $promotionId;

    public function __construct(string $promotionId)
    {
        $this->promotionId = $promotionId;
    }

    public function getRequestMethod(): string
    {
        return 'DELETE';
    }

    public function getRequestArray(): array
    {
        return [];
    }

    public function getRequestUri(): string
    {
        return 'sale/loyalty/promotions/'.$this->promotionId;
    }

    public function getContentType(): ?string
    {
        return null;
    }

}