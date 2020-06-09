<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 17:01
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\OrderManagement;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetCheckoutFormShipmentsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $id)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri("/order/checkout-forms/{$id}/shipments"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
