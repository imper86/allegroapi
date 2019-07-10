<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 16:49
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\OfferTags;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;
use function GuzzleHttp\Psr7\build_query;

class GetTagsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $userId, ?int $limit = null, ?int $offset = null)
    {
        parent::__construct(
            'GET',
            "/sale/offer-tags?" . build_query([
                'user.id' => $userId,
                'limit' => $limit,
                'offset' => $offset,
            ]),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
