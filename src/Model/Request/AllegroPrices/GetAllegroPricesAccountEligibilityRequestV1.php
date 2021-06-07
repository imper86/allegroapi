<?php


namespace Imper86\AllegroRestApiSdk\Model\Request\AllegroPrices;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetAllegroPricesAccountEligibilityRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/sale/allegro-prices-account-eligibility'),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
