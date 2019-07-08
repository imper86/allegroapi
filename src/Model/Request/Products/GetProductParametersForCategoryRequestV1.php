<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 08.07.19
 * Time: 17:59
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\Products;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetProductParametersForCategoryRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $categoryId)
    {
        parent::__construct(
            'GET',
            "/sale/categories/{$categoryId}/product-parameters",
            $this->prepareHeaders($token, ContentType::BETA_V1)
        );
    }
}
