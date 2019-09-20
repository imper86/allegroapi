<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 16:29
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\SetsAndRebates;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;
use Lcobucci\JWT\Token;

class GetPromotionsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, array $queryParameters = [])
    {
        if (!isset($queryParameters['user.id']) && $token instanceof Token) {
            $queryParameters['user.id'] = $token->getClaim('user_name');
        }

        parent::__construct(
            'GET',
            $this->prepareApiUri('/sale/loyalty/promotions', $queryParameters),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
