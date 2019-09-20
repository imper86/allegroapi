<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 08.07.19
 * Time: 18:04
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\Products;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Constants\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class GetProductRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, string $productId)
    {
        parent::__construct(
            'GET',
            $this->prepareApiUri("/sale/products/{$productId}"),
            $this->prepareHeaders($token, ContentType::BETA_V1)
        );
    }
}
