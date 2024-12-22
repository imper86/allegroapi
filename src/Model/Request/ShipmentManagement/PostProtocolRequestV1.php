<?php

namespace Imper86\AllegroRestApiSdk\Model\Request\ShipmentManagement;

use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

use function json_encode;

class PostProtocolRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, array $shipmentIds)
    {
        parent::__construct(
            'POST',
            $this->prepareApiUri('/shipment-management/protocol'),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1, ContentType::OCTET_STREAM),
            json_encode(
                [
                    'shipmentIds' => $shipmentIds,
                ]
            )
        );
    }
}