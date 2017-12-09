<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.12.17
 * Time: 16:28
 */

namespace Imper86\AllegroApi\Rest\Model\SaleLoyaltyPromotions\Post;


use Throwable;

class WrongObjectTypeException extends \Exception
{
    public function __construct($message = "You can put only Offer objects into OfferCollection", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}