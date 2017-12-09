<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.12.17
 * Time: 16:39
 */

namespace Imper86\AllegroApi\Rest\Model\SaleLoyaltyPromotions\Exception;


use Throwable;

class TooFewOffersException extends \Exception
{
    public function __construct($message = "OfferCollection must contain minimum 2 offers", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}