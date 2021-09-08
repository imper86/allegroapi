<?php

namespace Imper86\AllegroRestApiSdk\Model\Request\MessageCenter;

use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetThreadMessagesRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $threadId, ?array $query = null)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri(sprintf('/messaging/threads/%s/messages', $threadId), $query),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
