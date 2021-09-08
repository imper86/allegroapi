<?php

namespace Imper86\AllegroRestApiSdk\Model\Request\MessageCenter;

use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetMessageAttachmentRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $attachmentId)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri(sprintf('/messaging/message-attachments/%s', $attachmentId)),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1, '*/*')
        );
    }
}
