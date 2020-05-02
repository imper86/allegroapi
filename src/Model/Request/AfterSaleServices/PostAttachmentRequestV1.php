<?php


namespace Imper86\AllegroRestApiSdk\Model\Request\AfterSaleServices;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class PostAttachmentRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $fileName)
    {
        parent::__construct(
            'POST',
            $this->prepareApiUri('/after-sales-service-conditions/attachments'),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode(['name' => $fileName])
        );
    }
}
