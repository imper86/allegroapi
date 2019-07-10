<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 15:47
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\SizeTables;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;
use function GuzzleHttp\Psr7\build_query;

class GetSizeTablesRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $userId)
    {
        parent::__construct(
            'GET',
            "/sale/size-tables?" . build_query(['user.id' => $userId]),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
