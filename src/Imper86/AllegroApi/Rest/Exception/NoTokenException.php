<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 23.06.17
 * Time: 18:37
 */

namespace Imper86\AllegroApi\Rest\Exception;


use Throwable;

class NoTokenException extends \Exception
{
    public function __construct($message = "There is no token in service container", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}