<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 16:04
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\AdditionalServices;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;
use Lcobucci\JWT\Token;

class GetAdditionalServiceGroupsRequestV2 extends Request
{
    use RequestTrait;

    public function __construct(Token $token, ?int $offset = null, ?int $limit = null)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/sale/offer-additional-services/groups', [
                'user.id' => $token->getClaim('user_name'),
                'offset' => $offset,
                'limit' => $limit,
            ]),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
