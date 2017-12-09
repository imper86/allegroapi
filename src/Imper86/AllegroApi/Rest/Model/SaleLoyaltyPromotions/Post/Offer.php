<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.12.17
 * Time: 16:14
 */

namespace Imper86\AllegroApi\Rest\Model\SaleLoyaltyPromotions\Post;


class Offer
{
    /**
     * @var string
     */
    private $offerId;
    /**
     * @var int
     */
    private $quantity;
    /**
     * @var bool
     */
    private $promotionEntryPoint;

    public function __construct(string $offerId, int $quantity, bool $promotionEntryPoint)
    {
        $this->offerId = $offerId;
        $this->quantity = $quantity;
        $this->promotionEntryPoint = $promotionEntryPoint;
    }

    public function getData()
    {
        return [
            'id' => $this->offerId,
            'quantity' => $this->quantity,
            'promotionEntryPoint' => $this->promotionEntryPoint,
        ];
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
    public function setOfferId(string $offerId)
    {
        $this->offerId = $offerId;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return bool
     */
    public function isPromotionEntryPoint(): bool
    {
        return $this->promotionEntryPoint;
    }

    /**
     * @param bool $promotionEntryPoint
     */
    public function setPromotionEntryPoint(bool $promotionEntryPoint)
    {
        $this->promotionEntryPoint = $promotionEntryPoint;
    }
}