<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 08.07.19
 * Time: 16:57
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\PublicOfferInformation;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetOffersListingRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, array $queryParameters)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/offers/listing', $queryParameters),
            $this->prepareHeaders((string)$token, ContentType::PUBLIC_V1)
        );
    }
}
