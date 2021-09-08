<?php

namespace Imper86\AllegroRestApiSdk\Model\Request\SizeTables;

use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetSizeTableTemplatesRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token)
    {
        parent::__construct(
            "GET",
            $this->prepareApiUri("/sale/size-tables-templates"),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
