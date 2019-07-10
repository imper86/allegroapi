<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 16:24
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\OfferVariants;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;
use function GuzzleHttp\Psr7\build_query;

class GetOfferVariantsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $userId, ?int $offset = null, ?int $limit = null, ?string $query = null)
    {
        parent::__construct(
            'GET',
            "/sale/offer-variants?" . build_query([
                'user.id' => $userId,
                'offset' => $offset,
                'limit' => $limit,
                'query' => $query,
            ]),
            $this->prepareHeaders($token, ContentType::BETA_V1)
        );
    }
}
