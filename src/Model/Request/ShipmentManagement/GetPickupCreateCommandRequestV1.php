<?php

namespace Imper86\AllegroRestApiSdk\Model\Request\ShipmentManagement;

use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

use function sprintf;

class GetPickupCreateCommandRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $commandId)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri(sprintf('/shipment-management/pickups/create-commands/%s', $commandId)),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}