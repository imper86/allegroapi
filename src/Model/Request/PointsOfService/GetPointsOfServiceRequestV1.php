<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 15:51
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\PointsOfService;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;
use function GuzzleHttp\Psr7\build_query;

class GetPointsOfServiceRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $sellerId)
    {
        parent::__construct(
            'GET',
            "/points-of-service?" . build_query(['seller.id' => $sellerId]),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
