<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 14:29
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\ImagesAndAttachments;


use finfo;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Uri;
use Imper86\AllegroRestApiSdk\AllegroRestApiSdkInterface;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class PostSaleImageRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $imageBody, bool $sandbox = false)
    {
        $host = $sandbox ? AllegroRestApiSdkInterface::UPLOAD_SANDBOX_HOST : AllegroRestApiSdkInterface::UPLOAD_HOST;
        $uri = new Uri("https://{$host}/sales/images");

        $finfo = new finfo(FILEINFO_MIME_TYPE);

        $headers = $this->prepareHeaders($token, ContentType::PUBLIC_V1);
        $headers['Content-Type'] = $finfo->buffer($imageBody);

        parent::__construct(
            'POST',
            $uri,
            $headers,
            $imageBody
        );
    }
}
