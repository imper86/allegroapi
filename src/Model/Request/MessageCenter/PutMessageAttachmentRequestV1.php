<?php

namespace Imper86\AllegroRestApiSdk\Model\Request\MessageCenter;

use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class PutMessageAttachmentRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $attachmentId, string $contentType, $fileBody)
    {
        parent::__construct(
            'PUT',
            $this->prepareApiUri(sprintf('/messaging/message-attachments/%s', $attachmentId)),
            $this->prepareHeaders($token, $contentType, ContentType::PUBLIC_V1),
            $fileBody
        );
    }
}
