<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 28.03.2018
 * Time: 12:02
 */

namespace Imper86\AllegroApi\Rest\Model\Request\Post\Sale\Loyalty\Promotions\Bundle;


use Imper86\AllegroApi\Rest\Model\Request\RequestToolsTrait;

class Offer
{
    use RequestToolsTrait;

    /**
     * @var string
     */
    private $id;
    /**
     * @var int
     */
    private $quantity;
    /**
     * @var bool
     */
    private $promotionEntryPoint;

    public function __construct(string $id, int $quantity = 1, bool $promotionEntryPoint = false)
    {
        $this->id = $id;
        $this->quantity = $quantity;
        $this->promotionEntryPoint = $promotionEntryPoint;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'quantity' => $this->quantity,
            'promotionEntryPoint' => $this->promotionEntryPoint,
        ];
    }
}