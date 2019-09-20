<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 15:42
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\SizeTables;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetSizeTableRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $tableId)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri("/sale/size-tables/{$tableId}"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
