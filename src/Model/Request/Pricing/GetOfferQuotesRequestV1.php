<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 15:22
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\Pricing;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;
use function GuzzleHttp\Psr7\build_query;

class GetOfferQuotesRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, array $offerIds, ?string $name = null)
    {
        parent::__construct(
            'GET',
            "/pricing/offer-quotes?" . build_query(['offer.id' => $offerIds, 'name' => $name]),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
