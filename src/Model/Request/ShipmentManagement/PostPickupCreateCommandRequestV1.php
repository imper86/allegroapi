<?php

namespace Imper86\AllegroRestApiSdk\Model\Request\ShipmentManagement;

use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;
use Ramsey\Uuid\Uuid;

use function json_encode;

class PostPickupCreateCommandRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, array $shipmentIds, string $pickupDateProposalId, ?string $commandId = null)
    {
        if (null === $commandId) {
            $commandId = Uuid::uuid4()->toString();
        }

        parent::__construct(
            'POST',
            $this->prepareApiUri('/shipment-management/pickups/create-commands'),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode(
                [
                    'commandId' => $commandId,
                    'input' => [
                        'shipmentIds' => $shipmentIds,
                        'pickupDateProposalId' => $pickupDateProposalId,
                    ]
                ]
            )
        );
    }
}