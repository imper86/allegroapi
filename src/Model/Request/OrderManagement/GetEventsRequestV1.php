<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 16:56
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\OrderManagement;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;
use function GuzzleHttp\Psr7\build_query;

class GetEventsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, ?string $from = null, ?string $type = null, ?int $limit = null)
    {
        parent::__construct(
            'GET',
            "/order/events?" . build_query([
                'from' => $from,
                'type' => $type,
                'limit' => $limit,
            ]),
            $this->prepareHeaders($token, ContentType::BETA_V1)
        );
    }
}
