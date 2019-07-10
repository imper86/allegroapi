<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 14:21
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\Classifieds;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetOfferClassifiedsPackagesRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $offerId)
    {
        parent::__construct(
            'GET',
            "/sale/offer-classifieds-packages/{$offerId}",
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
