<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 01.08.2019
 * Time: 10:43
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\BadgeCampaigns;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class PostBadgeRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, array $body)
    {
        parent::__construct(
            'POST',
            '/sale/badges',
            $this->prepareHeaders($token, ContentType::BETA_V1),
            json_encode($body)
        );
    }
}
