<?php


namespace Imper86\AllegroRestApiSdk\Model\Request\AllegroPrices;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class PutAllegroPricesAccountConsentRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, array $body)
    {
        parent::__construct(
            'PUT',
            $this->prepareApiUri('/sale/allegro-prices-account-consent'),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1),
            json_encode($body)
        );
    }
}
