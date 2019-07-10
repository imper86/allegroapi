<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 16:21
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\OfferVariants;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class PutOfferVariantRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $setId, array $body)
    {
        parent::__construct(
            'PUT',
            "/sale/offer-variants/{$setId}",
            $this->prepareHeaders($token, ContentType::BETA_V1),
            json_encode($body)
        );
    }
}
