<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 28.03.2018
 * Time: 11:56
 */

namespace Imper86\AllegroApi\Rest\Model\Request\Post\Sale\Loyalty\Promotions\Bundle;


class OfferCollection implements \ArrayAccess, \Countable
{
    /**
     * @var Offer[]
     */
    private $offers = [];

    public function __construct(array $offers = [])
    {
        foreach ($offers as $offer) {
            $this[] = $offer;
        }
    }

    public function toRequestArray(): array
    {
        $requestArray = [];

        foreach ($this->offers as $offer) {
            $requestArray[] = $offer->toArray();
        }

        return $requestArray;
    }

    public function offsetExists($offset)
    {
        return isset($this->offers[$offset]);
    }

    public function offsetGet($offset)
    {
        return $this->offers[$offset];
    }

    public function offsetSet($offset, $value)
    {
        if (!$value instanceof Offer) {
            throw new \Exception('Only instances of '.Offer::class);
        }

        if (null === $offset) {
            $this->offers[] = $value;
        } else {
            $this->offers[$offset] = $value;
        }
    }

    public function offsetUnset($offset)
    {
        unset($this->offers[$offset]);
    }

    public function count()
    {
        return count($this->offers);
    }

}