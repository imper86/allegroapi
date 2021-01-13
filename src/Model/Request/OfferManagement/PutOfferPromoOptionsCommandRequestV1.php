<?php

namespace Imper86\AllegroRestApiSdk\Model\Request\OfferManagement;

use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;
use Ramsey\Uuid\Uuid;

class PutOfferPromoOptionsCommandRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, array $body, ?string $commandId = null)
    {
        $commandId = $commandId ?: Uuid::uuid4()->toString();

        parent::__construct(
            'PUT',
            $this->prepareApiUri(
                "/sale/offers/promo-options-command/{$commandId}"
            ),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode($body)
        );
    }
}
