<?php


namespace Imper86\AllegroRestApiSdk\Model\Request\AllegroPrices;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class PutAllegroPricesOfferConsentRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $offerId, array $body)
    {
        parent::__construct(
            'PUT',
            $this->prepareApiUri(sprintf('/sale/allegro-prices-offer-consents/%s', $offerId)),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode($body)
        );
    }
}
