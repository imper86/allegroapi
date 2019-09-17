<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 17.09.2019
 * Time: 12:20
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\Delivery;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetDeliverySettingsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token)
    {
        parent::__construct(
            'GET',
            '/sale/delivery-settings',
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
