<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 15:48
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\SizeTables;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;
use Lcobucci\JWT\Token;

class GetSizeTablesRequestV2 extends Request
{
    use RequestTrait;

    public function __construct(Token $token)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri('/sale/size-tables', [
                'user.id' => $token->getClaim('user_name'),
            ]),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
