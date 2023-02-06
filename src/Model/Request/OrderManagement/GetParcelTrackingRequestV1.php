<?php

namespace Imper86\AllegroRestApiSdk\Model\Request\OrderManagement;

use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetParcelTrackingRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $carrier, array $waybills)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri("/order/carriers/{$carrier}/tracking", [
                'waybill' => $waybills,
            ]),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
