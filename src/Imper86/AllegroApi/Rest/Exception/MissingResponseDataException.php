<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 25.07.17
 * Time: 13:54
 */

namespace Imper86\AllegroApi\Rest\Exception;


use Throwable;

class MissingResponseDataException extends \Exception
{
    public function __construct($message = "Some data in response struct is missing", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}