<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 08.07.19
 * Time: 17:32
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\CategoriesAndParameters;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetCategoryParametersRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $categoryId)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri("/sale/categories/{$categoryId}/parameters"),
            $this->prepareHeaders((string)$token, ContentType::PUBLIC_V1)
        );
    }
}
