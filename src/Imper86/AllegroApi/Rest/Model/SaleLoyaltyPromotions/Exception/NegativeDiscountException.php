<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.12.17
 * Time: 16:40
 */

namespace Imper86\AllegroApi\Rest\Model\SaleLoyaltyPromotions\Exception;


use Throwable;

class NegativeDiscountException extends \Exception
{
    public function __construct($message = "Discount float should be positive number", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}