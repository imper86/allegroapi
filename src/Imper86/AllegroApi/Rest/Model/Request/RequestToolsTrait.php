<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 24.03.2018
 * Time: 17:01
 */

namespace Imper86\AllegroApi\Rest\Model\Request;


use Imper86\AllegroApi\RestClientInterface;

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

    private function changeDateTimeZone(?\DateTime $dateTime): void
    {
        if (null === $dateTime) {
            return;
        }

        $zone = new \DateTimeZone(RestClientInterface::DATE_TIME_ZONE);
        $dateTime->setTimezone($zone);
    }
}
