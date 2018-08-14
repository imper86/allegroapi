<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 14.08.18
 * Time: 10:53
 */

namespace Imper86\AllegroApi\Rest\Model\Collection;


use Throwable;

class WrongElementTypeException extends \Exception
{
    public function __construct(
        string $expectedType,
        string $message = "Type of element inserted into Collection is wrong. Expected: ",
        int $code = 0,
        Throwable $previous = null
    ) {
        $message .= $expectedType;

        parent::__construct($message, $code, $previous);
    }
}
