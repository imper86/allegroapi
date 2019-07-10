<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 16:18
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\AfterSaleServices;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;
use function GuzzleHttp\Psr7\build_query;

class GetAfterSalesServiceConditionsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $type, string $sellerId, ?int $limit = null, ?int $offset = null)
    {
        parent::__construct(
            'GET',
            "/after-sales-service-conditions/{$type}?" . build_query([
                'seller.id' => $sellerId,
                'limit' => $limit,
                'offset' => $offset,
            ]),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
