<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 15:40
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\BatchOfferModification;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetOfferQuantityChangeCommandRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $commandId)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri("/sale/offer-quantity-change-commands/{$commandId}"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
