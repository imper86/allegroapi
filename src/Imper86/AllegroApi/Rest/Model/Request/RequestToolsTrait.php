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
    private function changeDateTimeZone(?\DateTime $dateTime): void
    {
        if (null === $dateTime) {
            return;
        }

        $dateTime->setTimezone(new \DateTimeZone(RestClientInterface::DATE_TIME_ZONE));
    }
}
