<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 16:06
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\AdditionalServices;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;
use Lcobucci\JWT\Token;
use function GuzzleHttp\Psr7\build_query;

class GetAdditionalServicesDefinitionsRequestV2 extends Request
{
    use RequestTrait;

    public function __construct(Token $token, ?int $offset = null, ?int $limit = null)
    {
        parent::__construct(
            'GET',
            "/sale/offer-additional-services/definitions?" . build_query([
                'user.id' => $token->getClaim('user_name'),
                'offset' => $offset,
                'limit' => $limit,
            ]),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
