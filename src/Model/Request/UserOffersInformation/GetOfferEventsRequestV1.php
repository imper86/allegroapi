<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 29.07.2019
 * Time: 17:41
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\UserOffersInformation;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;
use function GuzzleHttp\Psr7\build_query;

class GetOfferEventsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, array $queryParameters = [])
    {
        parent::__construct(
            'GET',
            '/sale/offer-events?' . build_query($queryParameters),
            $this->prepareHeaders($token, ContentType::BETA_V1)
        );
    }
}
