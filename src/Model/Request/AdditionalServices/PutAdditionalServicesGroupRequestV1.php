<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 16:09
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\AdditionalServices;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class PutAdditionalServicesGroupRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $groupId, array $body)
    {
        parent::__construct(
            'PUT',
            "/sale/offer-additional-services/groups/{$groupId}",
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode($body)
        );
    }
}
