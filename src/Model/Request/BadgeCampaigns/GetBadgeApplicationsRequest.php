<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 01.08.2019
 * Time: 10:47
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\BadgeCampaigns;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;
use function GuzzleHttp\Psr7\build_query;

class GetBadgeApplicationsRequest extends Request
{
    use RequestTrait;

    public function __construct($token, array $queryParameters = [])
    {
        parent::__construct(
            'GET',
            '/sale/badge-applications?' . build_query($queryParameters),
            $this->prepareHeaders($token, ContentType::BETA_V1)
        );
    }
}
