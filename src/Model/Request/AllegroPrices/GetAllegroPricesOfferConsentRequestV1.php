<?php


namespace Imper86\AllegroRestApiSdk\Model\Request\AllegroPrices;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetAllegroPricesOfferConsentRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $offerId)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri(sprintf('/sale/allegro-prices-offer-consents/%s', $offerId)),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
