<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 16:44
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\Delivery;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetShippingRateRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $id)
    {
        parent::__construct(
            'GET',
            "/sale/shipping-rates/{$id}",
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
