<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 04.03.2018
 * Time: 16:49
 */

namespace Imper86\AllegroApi\Rest\Exception;


use Throwable;

class InvalidRequestMethodException extends \Exception
{
    public function __construct(string $message = "Invalid request method, you should use GET, POST, PUT or DELETE", int $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}