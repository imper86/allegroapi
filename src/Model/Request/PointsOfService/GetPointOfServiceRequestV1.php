<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 15:53
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\PointsOfService;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetPointOfServiceRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $id)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri("/points-of-service/{$id}"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
