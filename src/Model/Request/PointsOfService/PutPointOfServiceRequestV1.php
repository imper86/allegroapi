<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 15:54
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\PointsOfService;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class PutPointOfServiceRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $id, array $body)
    {
        parent::__construct(
            'PUT',
            "/points-of-service/{$id}",
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode($body)
        );
    }
}
