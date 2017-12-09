<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.12.17
 * Time: 16:14
 */

namespace Imper86\AllegroApi\Rest\Model\SaleLoyaltyPromotions\Post;


class OfferCollection implements \ArrayAccess, \Countable
{
    /**
     * @var Offer[]
     */
    private $offers = [];

    public function add(Offer $offer)
    {
        $this->validate($offer);
        $this->offers[] = $offer;
    }

    private function validate(Offer $offer)
    {
        if ($offer->isPromotionEntryPoint()) {
            foreach ($this->offers as $checkOffer) {
                if ($checkOffer->isPromotionEntryPoint()) {
                    throw new TooManyPromotionEntryPointsException();
                }
            }
        }

        if (9 <= count($this->offers)) {
            throw new TooManyPromotionOffersException();
        }
    }

    public function getData()
    {
        $returnArray = [];

        foreach ($this->offers as $offer) {
            $returnArray[] = $offer->getData();
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
        if (get_class($value) !== Offer::class) {
            throw new WrongObjectTypeException();
        }

        $this->validate($value);
        $this->offers[$offset] = $value;
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