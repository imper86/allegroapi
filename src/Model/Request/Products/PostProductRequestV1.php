<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 08.07.19
 * Time: 18:03
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\Products;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;

class PostProductRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, array $body)
    {
        parent::__construct(
            'POST',
            "/sale/products",
            $this->prepareHeaders($token, ContentType::BETA_V1),
            json_encode($body)
        );
    }
}
