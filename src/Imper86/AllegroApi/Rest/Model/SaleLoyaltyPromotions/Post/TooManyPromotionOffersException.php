<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.12.17
 * Time: 16:26
 */

namespace Imper86\AllegroApi\Rest\Model\SaleLoyaltyPromotions\Post;


use Throwable;

class TooManyPromotionOffersException extends \Exception
{
    public function __construct($message = "Offer collection can have maximum 9 offers", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}