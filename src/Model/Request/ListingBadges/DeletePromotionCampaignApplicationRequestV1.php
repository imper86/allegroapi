<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 16:39
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\ListingBadges;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class DeletePromotionCampaignApplicationRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $applicationId)
    {
        parent::__construct(
            'DELETE',
            "/sale/loyalty/promotion-campaign-applications/{$applicationId}",
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
