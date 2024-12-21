<?php

namespace Imper86\AllegroRestApiSdk\Model\Request\ShipmentManagement;

use DateTimeInterface;
use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

use function json_encode;

class PostPickupProposalsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, array $shipmentIds, DateTimeInterface $readyDate)
    {
        parent::__construct(
            'POST',
            $this->prepareApiUri('/shipment-management/pickup-proposals'),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode(
                [
                    'shipmentIds' => $shipmentIds,
                    'readyDate' => $readyDate->format('Y-m-d'),
                ]
            )
        );
    }
}