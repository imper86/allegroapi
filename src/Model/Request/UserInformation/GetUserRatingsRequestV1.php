<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 17:18
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\UserInformation;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;
use function GuzzleHttp\Psr7\build_query;

class GetUserRatingsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $userId, ?string $recommended = null, ?int $offset = null, ?int $limit = null)
    {
        parent::__construct(
            'GET',
            "/sale/user-ratings?" . build_query([
                'user.id' => $userId,
                'recommended' => $recommended,
                'offset' => $offset,
                'limit' => $limit,
            ]),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
