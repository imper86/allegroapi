<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 08.07.19
 * Time: 17:37
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\UserOffersInformation;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetOfferRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $offerId)
    {
        parent::__construct(
            'GET',
            "/sale/offers/{$offerId}",
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
