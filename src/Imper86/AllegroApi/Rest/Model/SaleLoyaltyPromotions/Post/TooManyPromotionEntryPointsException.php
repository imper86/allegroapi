<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.12.17
 * Time: 16:23
 */

namespace Imper86\AllegroApi\Rest\Model\SaleLoyaltyPromotions\Post;


use Throwable;

class TooManyPromotionEntryPointsException extends \Exception
{
    public function __construct($message = "Offers collection can have only one entryPoint", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}