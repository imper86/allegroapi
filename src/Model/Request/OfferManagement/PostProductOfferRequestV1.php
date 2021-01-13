<?php


namespace Imper86\AllegroRestApiSdk\Model\Request\OfferManagement;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class PostProductOfferRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, array $body, string $contentType = ContentType::PUBLIC_V1)
    {
        parent::__construct(
            'POST',
            $this->prepareApiUri('/sale/product-offers'),
            $this->prepareHeaders($token, $contentType),
            json_encode($body)
        );
    }
}
