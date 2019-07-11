<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 14:38
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\ImagesAndAttachments;


use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Uri;
use Imper86\AllegroRestApiSdk\AllegroRestApiSdkInterface;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class PostSaleImageWithUrlRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $imageUrl, bool $sandbox = false)
    {
        $host = $sandbox ? AllegroRestApiSdkInterface::UPLOAD_SANDBOX_HOST : AllegroRestApiSdkInterface::UPLOAD_HOST;
        $uri = new Uri("https://{$host}/sale/images");

        parent::__construct(
            'POST',
            $uri,
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode(['url' => $imageUrl])
        );
    }
}
