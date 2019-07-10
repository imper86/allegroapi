<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 14:24
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\Classifieds;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;
use function GuzzleHttp\Psr7\build_query;

class GetClassifiedsPackagesRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $categoryId)
    {
        parent::__construct(
            'GET',
            "/sale/classifieds-packages?" . build_query(['category.id' => $categoryId]),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
