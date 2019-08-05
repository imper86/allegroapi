<?php
/**
 * Copyright: IMPER.INFO Adrian Szuszkiewicz
 * Date: 05.08.2019
 * Time: 13:46
 */

namespace Imper86\AllegroRestApiSdk\Model\Request\Payments;


use GuzzleHttp\Psr7\Request;
use Imper86\AllegroRestApiSdk\Model\Request\ContentType;
use Imper86\AllegroRestApiSdk\Model\Request\RequestTrait;
use function GuzzleHttp\Psr7\build_query;

class GetRefundsRequestV1 extends Request
{
    use RequestTrait;

    public function __construct($token, array $queryParameters)
    {
        parent::__construct(
            'GET',
            '/payments/refunds?' . build_query($queryParameters),
            $this->prepareHeaders($token, ContentType::PUBLIC_V1)
        );
    }
}
