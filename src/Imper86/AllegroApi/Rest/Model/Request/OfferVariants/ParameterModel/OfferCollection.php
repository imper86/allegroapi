<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 14.08.18
 * Time: 14:53
 */

namespace Imper86\AllegroApi\Rest\Model\Request\OfferVariants\ParameterModel;


use Imper86\AllegroApi\Rest\Model\Collection\AbstractCollection;
use Imper86\AllegroApi\Rest\Model\Collection\WrongElementTypeException;

class OfferCollection extends AbstractCollection
{
    public function add($value, $offset = null)
    {
        if (!$value instanceof Offer) {
            throw new WrongElementTypeException(Offer::class);
        }

        parent::add($value, $offset);
    }

}
