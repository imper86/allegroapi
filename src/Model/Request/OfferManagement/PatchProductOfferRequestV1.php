<?php


namespace Imper86\AllegroRestApiSdk\Model\Request\OfferManagement;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class PatchProductOfferRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $offerId, array $body)
    {
        parent::__construct(
            'PATCH',
            $this->prepareApiUri(sprintf('/sale/product-offers/%s', $offerId)),
            $this->prepareHeaders($token, ContentType::BETA_V1),
            json_encode($body)
        );
    }
}
