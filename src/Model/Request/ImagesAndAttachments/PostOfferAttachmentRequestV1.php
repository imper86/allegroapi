<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 14:39
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\ImagesAndAttachments;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class PostOfferAttachmentRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $type, string $fileName)
    {
        parent::__construct(
            'POST',
            $this->prepareApiUri("/sale/offer-attachments"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode([
                'type' => $type,
                'file' => ['name' => $fileName],
            ])
        );
    }
}
