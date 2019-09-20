<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 15:29
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\BatchOfferModification;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;
use Ramsey\Uuid\Uuid;

class PutOfferModificationCommandRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, array $body, ?string $commandId = null)
    {
        $commandId = $commandId ?? Uuid::uuid4()->toString();

        parent::__construct(
            'PUT',
            $this->prepareApiUri("/sale/offer-modification-commands/{$commandId}"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode($body)
        );
    }
}
