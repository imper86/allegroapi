<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 28.03.2018
 * Time: 13:45
 */

namespace Imper86\AllegroApi\Rest\Model\Request\Post\Sale\Loyalty\Promotions\Multipack;


class OfferCollection implements \ArrayAccess, \Countable
{
    /**
     * @var string[]
     */
    private $offers;

    public function __construct(array $offers = [])
    {
        foreach ($offers as $offer) {
            $this[] = $offer;
        }
    }

    public function toRequestArray(): array
    {
        $returnArray = [];

        foreach ($this->offers as $offer) {
            $returnArray[] = [
                'id' => $offer,
            ];
        }

        return $returnArray;
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
        if ('string' !== gettype($value)) {
            throw new \Exception('You can only set string elements in this collection');
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