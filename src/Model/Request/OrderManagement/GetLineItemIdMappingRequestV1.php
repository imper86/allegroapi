<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 17:03
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\OrderManagement;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetLineItemIdMappingRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, ?string $lineItemId, ?string $dealId)
    {
        if ($lineItemId) {
            $query['lineItemId'] = $lineItemId;
        }

        if ($dealId) {
            $query['dealId'] = $dealId;
        }

        parent::__construct(
            'GET',
            $this->prepareApiUri('/order/line-item-id-mappings', $query ?? []),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
