<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 24.03.2018
 * Time: 17:01
 */

namespace Imper86\AllegroApi\Rest\Model\Request;


trait RequestToolsTrait
{
    private function stringifyBoolean(?bool $value): ?string
    {
        switch ($value) {
            case true: $value = 'true'; break;
            case false: $value = 'false'; break;
        }

        return $value;
    }
}