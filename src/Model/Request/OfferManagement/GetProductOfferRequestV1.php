<?php


namespace Imper86\AllegroRestApiSdk\Model\Request\OfferManagement;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetProductOfferRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $offerId)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri(sprintf('/sale/product-offers/%s', $offerId)),
            $this->prepareHeaders($token, ContentType::PUBLIC_V2)
        );
    }
}
