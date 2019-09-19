<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 16:58
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\OrderManagement;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetEventsStatsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token)
    {
        parent::__construct(
            'GET',
            "/order/event-stats",
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
