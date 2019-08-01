<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 01.08.2019
 * Time: 10:46
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\BadgeCampaigns;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetBadgeApplicationRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $applicationId)
    {
        parent::__construct(
            'GET',
            "/sale/badge-applications/{$applicationId}",
            $this->prepareHeaders($token, ContentType::BETA_V1)
        );
    }
}
