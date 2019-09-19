<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 09.07.19
 * Time: 16:59
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\OrderManagement;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;
use function GuzzleHttp\Psr7\build_query;

class GetCheckoutFormsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, array $queryParameters = [])
    {
        parent::__construct(
            'GET',
            "/order/checkout-forms?" . build_query($queryParameters),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
