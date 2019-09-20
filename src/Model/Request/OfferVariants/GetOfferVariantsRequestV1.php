<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 16:24
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\OfferVariants;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetOfferVariantsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $userId, ?int $offset = null, ?int $limit = null, ?string $query = null)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/sale/offer-variants', [
                'user.id' => $userId,
                'offset' => $offset,
                'limit' => $limit,
                'query' => $query,
            ]),
            $this->prepareHeaders($token, ContentType::BETA_V1)
        );
    }
}
