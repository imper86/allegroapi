<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 08.07.19
 * Time: 17:28
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\CategoriesAndParameters;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;
use function GuzzleHttp\Psr7\build_query;

class GetCategoriesRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, ?string $parentId = null)
    {
        parent::__construct(
            'GET',
            "/sale/categories?" . build_query(['parent.id' => $parentId]),
            $this->prepareHeaders((string)$token, ContentType::PUBLIC_V1)
        );
    }
}
