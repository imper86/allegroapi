<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 08.07.19
 * Time: 17:25
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\PublicUserInformation;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetUserRatingsSummaryRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $userId)
    {
        parent::__construct(
            'GET',
            "/users/{$userId}/ratings-summary",
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
