<?php


namespace Imper86\AllegroRestApiSdk\Model\Request\AfterSaleServices;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class PutAttachmentRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $requestUrl, string $fileBody)
    {
        $finfo = new \finfo(FILEINFO_MIME_TYPE);
        $headers = $this->prepareHeaders($token, ContentType::PUBLIC_V1);
        $headers['Content-Type'] = $finfo->buffer($fileBody);

        parent::__construct(
            'PUT',
            $requestUrl,
            $headers,
            $fileBody
        );
    }
}
