<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 14:38
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\ImagesAndAttachments;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\AllegroRestApiSdkInterface;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class PostSaleImageWithUrlRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $imageUrl)
    {
        parent::__construct(
            'POST',
            $this->prepareUploadUri('/sale/images'),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode(['url' => $imageUrl])
        );
    }
}
