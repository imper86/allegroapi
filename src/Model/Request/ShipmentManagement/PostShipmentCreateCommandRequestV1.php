<?php

namespace Imper86\AllegroRestApiSdk\Model\Request\ShipmentManagement;

use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

use function json_encode;

class PostShipmentCreateCommandRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, array $body)
    {
        parent::__construct(
            'POST',
            $this->prepareApiUri('/shipment-management/shipments/create-commands'),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode($body)
        );
    }
}