<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 15:38
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\BatchOfferModification;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;
use Ramsey\Uuid\Uuid;

class PutOfferQuantityChangeCommandRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, array $body, ?string $commandId)
    {
        $commandId = $commandId ?? Uuid::uuid4()->toString();

        parent::__construct(
            'PUT',
            $this->prepareApiUri("/sale/offer-quantity-change-commands/{$commandId}"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode($body)
        );
    }
}
