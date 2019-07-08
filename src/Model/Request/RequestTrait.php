<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 08.07.19
 * Time: 16:55
 */

namespace Imper86\AllegroRestApiSdk\Model\Request;


use DateTime;
use DateTimeZone;

trait RequestTrait
{
    private function prepareHeaders($token, string $contentType): array
    {
        return [
            'Authorization' => "Bearer {$token}",
            'Accept' => $contentType,
            'Content-Type' => $contentType,
        ];
    }

    private function dateTimeFormat(?DateTime $dateTime): ?string
    {
        if (!$dateTime) {
            return null;
        }

        $dateTime->setTimezone(new DateTimeZone('UTC'));

        return $dateTime->format('Y-m-d\TH:i:s.v\Z');
    }
}
