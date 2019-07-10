<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 16:32
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\SetsAndRebates;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class DeletePromotionRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $promotionId)
    {
        parent::__construct(
            'DELETE',
            "/sale/loyalty/promotions/{$promotionId}",
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
