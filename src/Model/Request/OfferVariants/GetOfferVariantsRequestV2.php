<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 16:27
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\OfferVariants;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;
use Lcobucci\JWT\Token;

class GetOfferVariantsRequestV2 extends Request
{
    use RequestTrait;

    public function __construct(Token $token, ?int $offset = null, ?int $limit = null, ?string $query = null)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/sale/offer-variants', [
                'user.id' => $token->getClaim('user_name'),
                'offset' => $offset,
                'limit' => $limit,
                'query' => $query,
            ]),
            $this->prepareHeaders($token, ContentType::BETA_V1)
        );
    }
}
