<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 16:20
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\AfterSaleServices;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;
use Lcobucci\JWT\Token;
use function GuzzleHttp\Psr7\build_query;

class GetAfterSalesServiceConditionsRequestV2 extends Request
{
    use RequestTrait;

    public function __construct(Token $token, string $type, ?int $limit = null, ?int $offset = null)
    {
        parent::__construct(
            'GET',
            "/after-sales-service-conditions/{$type}?" . build_query([
                'seller.id' => $token->getClaim('user_name'),
                'limit' => $limit,
                'offset' => $offset,
            ]),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
