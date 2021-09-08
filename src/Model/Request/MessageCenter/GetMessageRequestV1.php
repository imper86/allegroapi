<?php

namespace Imper86\AllegroRestApiSdk\Model\Request\MessageCenter;

use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetMessageRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $messageId)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri(sprintf('/messaging/messages/%s', $messageId)),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
