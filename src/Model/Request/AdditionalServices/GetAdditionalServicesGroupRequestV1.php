<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 16:08
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\AdditionalServices;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetAdditionalServicesGroupRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $groupId)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri("/sale/offer-additional-services/groups/{$groupId}"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
