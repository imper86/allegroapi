<?php


namespace Imper86\AllegroRestApiSdk\Model\Request\OfferVariants;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class PostOfferVariantRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, array $body)
    {
        parent::__construct(
            'POST',
            $this->prepareApiUri('/sale/offer-variants'),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode($body)
        );
    }
}