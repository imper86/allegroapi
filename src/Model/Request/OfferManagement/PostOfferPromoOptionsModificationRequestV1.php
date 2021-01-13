<?php

namespace Imper86\AllegroRestApiSdk\Model\Request\OfferManagement;

use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class PostOfferPromoOptionsModificationRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $offerId, array $body)
    {
        parent::__construct(
            'POST',
            $this->prepareApiUri(
                "/sale/offers/{$offerId}/promo-options-modification"
            ),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode($body)
        );
    }
}
