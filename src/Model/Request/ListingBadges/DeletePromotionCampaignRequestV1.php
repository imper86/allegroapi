<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 16:36
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\ListingBadges;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;
use function GuzzleHttp\Psr7\build_query;

class DeletePromotionCampaignRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $promotionId, string $campaignId)
    {
        parent::__construct(
            'DELETE',
            "/sale/loyalty/promotion-campaigns?" . build_query([
                'promotion.id' => $promotionId,
                'campaign.id' => $campaignId,
            ]),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
