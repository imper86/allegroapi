<?php

namespace Imper86\AllegroRestApiSdk\Model\Request\MessageCenter;

use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetThreadsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, ?array $query = null)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/messaging/threads', $query),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
