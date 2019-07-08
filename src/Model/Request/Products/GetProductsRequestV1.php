<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 08.07.19
 * Time: 18:00
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\Products;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;
use function GuzzleHttp\Psr7\build_query;

class GetProductsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, array $queryParameters = [])
    {
        parent::__construct(
            'GET',
            "/sale/products?" . build_query($queryParameters),
            $this->prepareHeaders($token, ContentType::BETA_V1)
        );
    }
}
