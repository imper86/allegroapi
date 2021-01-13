<?php

namespace Imper86\AllegroRestApiSdk\Model\Request\OfferManagement;

use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetOfferPromoOptionsCommandRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $commandId)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri(
                "/sale/offers/promo-options-command/{$commandId}"
            ),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
