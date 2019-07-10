<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 16:54
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\OfferTags;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetOfferTagsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $offerId)
    {
        parent::__construct(
            'GET',
            "/sale/offers/{$offerId}/tags",
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
