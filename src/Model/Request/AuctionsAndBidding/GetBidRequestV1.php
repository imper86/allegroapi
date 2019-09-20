<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 17:38
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\AuctionsAndBidding;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetBidRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $offerId)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri("/bidding/offers/{$offerId}/bid"),
            $this->prepareHeaders($token, ContentType::BETA_V1)
        );
    }
}
